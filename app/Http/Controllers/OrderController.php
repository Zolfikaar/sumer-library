<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function index() {
        $orders = Order::with(['customer', 'items'])->orderBy('id', 'DESC')->get();

        return view('orders.index', compact('orders'));
    }


    public function create() {


        return view('orders.create');
    }
}
