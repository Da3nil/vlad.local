<?php

namespace App\Http\Controllers;

use App\Customer;
use Illuminate\Http\Request;

class CustomersController extends Controller
{
    public function show()
    {
        $customers = Customer::all();
        return view('customers', ['customers' => $customers]);
    }
}
