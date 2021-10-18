<?php

namespace App\Http\Controllers;

use App\Http\Requests\OrderImportRequest;
use App\Imports\OrdersImport;
use App\Models\Order;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $orders = Order::latest()->get();

        return view('orders.index', compact('orders'));
    }

    /**
     * Import and save data on storage.
     * 
     * @param  \App\Http\Requests\OrderImportRequest  $request
     * @return \App\Http\Response
     */
    public function import(OrderImportRequest $request)
    {
        Excel::import(new OrdersImport, $request->validated()['file']);

        return back();
    }
}
