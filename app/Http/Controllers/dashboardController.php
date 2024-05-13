<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\support\facades\Auth;
use App\Models\Products;
use App\Models\Category;
//use App\Models\UserForm;
//use Illuminate\support\facades\file;


class dashboardController extends Controller
{
    public function index(Request $request)
    {
        $user = Auth::user();
        $products = Products::all();
        $categories = Category::where('status',1)->get();

        $search = '';
       
       if($request->has("search") && $request->search != ''){
       $search = $request->search;
        $products = Products::where('product_name','=',$search)->paginate(5);
      }
      else
          {
            $products = Products::with('categories')->paginate(5);
          }
        return view('dashboard.index',compact('user','products', 'categories', 'search'));
    } 
    
    public function details($id)
   {
        $user = Auth::user();
        $product = Products::find($id);
        return view('dashboard.details',compact('product','user'));
    }
};


