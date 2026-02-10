<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreOrderRequest;
use App\Http\Requests\UpdateOrderRequest;
use App\Models\Order;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function dashboard()
    {
        return view("admin.dashboard");
    }

    /**
     * Show the form for creating a new resource.
     */
    public function index()
    {
        $orders = Order::with("user")->latest()->get();



        return view("admin.orders.orders", compact("orders"));

    }

    /**
     * Store a newly created resource in storage.
     */
    public function show(Order $order)
    {
        
        return view("admin.orders.orders-detail", compact("order"));

    }

}
