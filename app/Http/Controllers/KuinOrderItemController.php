<?php

namespace App\Http\Controllers;

use App\Models\KuinOrder;
use App\Models\KuinOrderItem;
use App\Models\KuinProduct;
use Http;
use Illuminate\Http\Request;

class KuinOrderItemController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(int $orderId)
    {
        return KuinOrderItem::all();
        // return KuinOrderItem::where('order_id', '=', $orderId)->get();
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('orderitems.create', [
            'products' => KuinProduct::all(),
            'orders' => KuinOrder::all(),
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // dd($request->all());
        $order_id = $request->order_id;
        $product_id = $request->product_id;
        $quantity = $request->quantity;
        $token = '78|bdyLkQtJ047KRGTvVOaEtwt51HCYdaH0fdS9Ku6D';
        $uri = 'https://kuin.summaict.nl/api/orderItem?product_id=';
        $uri .= $product_id . '&quantity=' . $quantity;
        $uri .= '&order_id=' . $order_id;
        // dd($uri);
        $rows = Http::withToken($token)->post($uri);
        dd($rows);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}


