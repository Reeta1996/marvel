<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Orders;
use Illuminate\support\facades\Auth;
//use Illuminate\support\facades\file;


class ordersController extends Controller
{
    public function index()
    {
        $user = Auth::user();
        $orders = Orders::all();
        return view('orders.index', compact('orders','user'));
    }  
}