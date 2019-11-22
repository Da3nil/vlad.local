<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CustomersOrderController extends Controller
{
    public function index()
    {
        return view('orders');
    }

    public function do($id)
    {
        return $id;
    }
}
