<?php

namespace App\Http\Controllers;

use App\Customer;
use App\CustomersOrder;
use App\Product;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CustomersOrderController extends Controller
{
    public function index()
    {
        $orders = CustomersOrder::all();
        return view('orders', ['orders' => $orders]);
    }

    public function do($id)
    {
        $product = Product::all()->find($id);
        return view('neworder', ['product' => $product]);
    }

    public function create(Request $request)
    {
        $phone = $request['myphone'];
        $prodId = $request['id'];
        $product = Product::all()->find($prodId);
        $date = Carbon::now();
        $fio = $request['fio'];

        if ($phone == '') {
            return redirect()->back()->withErrors(['msg' => 'Телефон не указан']);
        }

        $customer = Customer::all()->where('c_phone', '=', $phone)->first();

//        var_dump($customer);

        if ($customer !== null) {
            $customer->c_total_profit += $product['price'];

        } else {
            $customer = new Customer;
            $customer->c_phone = $phone;
            $customer->c_total_profit = $product['price'];
        }

        if ($fio != '') {
            $customer->c_name = $fio;
        }
        $customer->c_last_date_arrival = $date;

        $customer->save();

        $data = [
            'c_id'          => $customer['id'],
            'or_date'       => $date,
            'or_sum'        => $product['price'],
            'or_product'    => $prodId
        ];

        DB::table('customers_orders')->insert($data);

        return redirect()->back()->with(['success' => 'success']);
    }
}
