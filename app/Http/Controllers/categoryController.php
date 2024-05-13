<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use Illuminate\support\facades\Auth;


class categoryController extends Controller
{
    public function index(Request $request)
    {
        $user = Auth::user();
      
        if($request->has("search") && $request->search != ''){
          $search = $request->search;
          $category = Category::where('name','=',$search)->paginate(5);
        }
        else
        {
              $search = '';
              $category = Category::paginate(5);
        }

        //$category = Category::all();
        return view('category.index', compact('category','user','search'));
    }  

    public function add()
    {
        $user = Auth::user();
        return view('category.add', compact('user'));
    }  



    public function store(Request $Request)
      {
        $Request->validate([
            'name'=> 'required|max:255',
         ]);

         Category::create($Request->all());
    return redirect()->route('category.index')
      ->with('success', 'category created successfully.');

    }
    
    public function edit($id)
     {
        $user = Auth::user();
        $category =  Category::find($id);
         return view('category.edit', compact('category','user'));
  }

  public function update(Request $request, $id)
    {
    $request->validate([
      'name' => 'required|max:255',
      
    ]);
    $category = Category::find($id);
    $category->update($request->all());
    return redirect()->route('category.index')
      ->with('success', 'category updated successfully.');
    }

    public function status_update(Request $request, $id)
    {
       $category = Category::find($id);

       if( $category->status == 0 )
       {
           $category->update(array('status'=>1));
       }
       else
       {
            $category->update(array('status'=>0));
       }
   
    return redirect()->route('category.index')
      ->with('success', 'category status_update successfully.');
    }
  
    public function destroy($id)
  {
    $category = Category::find($id);
    $category->delete();
    return redirect()->route('category.index')
      ->with('success', 'category deleted successfully');
  }


}