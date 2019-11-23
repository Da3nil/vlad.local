<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;

class CustomersOrderController extends Controller
{
    public function index()
    {
        return view('orders');
    }

    public function do($id)
    {
        $product = Product::all()->find($id);
        return view('neworder', ['product' => $product]);
    }
}
