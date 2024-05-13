<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Products;
use Illuminate\support\facades\Auth;
use App\Models\Category;
use App\Models\CategoryProducts;
use Illuminate\support\facades\file;


class productController extends Controller
{

    public function index(Request $request)
    {
        $user = Auth::user();
        
        if($request->has("search") && $request->search != ''){
            $search = $request->search;
            //$products = Products::where('product_name','=',$search)->orwhere('brand_name','=',$search)->paginate(5);
            $products = Products::with('categories')->where('product_name','=',$search)->orwhere('brand_name','=',$search)->paginate(5);
          }
          else
          {
                $search = '';
               //$products = Products::paginate(5);
                $products = Products::with('categories')->paginate(5);
          }
        //$products = Products::all();
        return view('product.index', compact('products','user','search'));
    }  

    public function add()
    {
        $user = Auth::user();
        $category = Category::all();
        return view('product.add',compact('user','category'));
    } 
    
    public function create(Request $request)
    {
        $request->validate([
            'product_name' => 'required|max:255',
            'brand_name' => 'required',
            'colors'   => 'required',
            'category_id'  =>  'required',
            'currency' =>  'required',
            'price' =>  'required',
            'quantity' =>  'required',
            'desc' =>  'required',
            'image' =>  'required',
         ]);

         $imageName=time().'.'. $request->image->extension();
         $request->image->move(public_path('image'),$imageName);

         $data = [
            'product_name' => $request->product_name,
            'brand_name' => $request->brand_name,
            'colors' => $request->colors,
            //'category_id' => $request->category_id,
           'currency' => $request->currency,
           'price' => $request->price,
          'quantity' => $request->quantity,
          'desc' => $request->desc,
          'image' => $imageName
        ];

        $product_id = Products::create($data)->id;

        foreach($request->category_id as $category_id)
        {
             $data = [
                         'category_id' => $category_id,
                      'products_id' => $product_id
             ];
             CategoryProducts::create($data);
       }
       // Products::create($data);
        return redirect()->route('product.index')
          ->with('success', 'product created successfully.');


    } 
    
    public function edit($id)
    {
       $user = Auth::user();
       $product =  Products::find($id);
       $category = Category::all();

       $product_category_ids = array();
       foreach($product->categories as $categories)
       {
            $product_category_ids[] = $categories->id;
       }
        return view('product.edit', compact('product','user','category','product_category_ids'));
    }

 public function update(Request $request, $id)
    {
    $request->validate([
      'product_name' => 'required|max:255',
      'brand_name' =>'required',
      'colors' =>'required',
      'category_id' => 'required',
      'currency' => 'required',
      'price' => 'required',
      'quantity' => 'required',
        'desc' => 'required',
       // 'image' =>'required'
      
    ]);
    $product = Products::find($id);
    $imageName = $product->image;
    if($request->hasFile('image'))
    {
        $imageName=time().'.'. $request->image->extension();
        $request->image->move(public_path('image'),$imageName);
    }
    $data =[
        'product_name' => $request->product_name,  
        'brand_name' => $request->brand_name,  
        'colors' => $request->colors,   
        //'category_id' => $request->category_id,  
        'currency' => $request->currency,  
        'price' => $request->price,  
        'quantity' => $request->quantity,  
        'desc' => $request->desc,  
        'image' => $imageName 
    ];
        $product->update($data);
        $product->categories()->detach();     // for delete old entries
        foreach($request->category_id as $category_id)         // for new entry in category_products 
        {
            $data = [
              'category_id' => $category_id,
              'products_id' => $id
            ];
            CategoryProducts::create($data);
        }
       return redirect()->route('product.index')
      ->with('success', 'product updated successfully.');
    }

    public function destroy($id)
    {
        $product = Products::find($id);
        $product->delete();
      return redirect()->route('product.index')
        ->with('success', 'category deleted successfully');
    }
};