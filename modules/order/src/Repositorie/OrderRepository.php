<?php

namespace Order\Repositorie;

use  Order\Database\Models\Order;
use Illuminate\Support\Facades\Auth;

class OrderRepository
{

    public function storeOrder($productsId, $price)
    {
        $user = Auth::user();
        $order = new Order();
        $order->price = $price;
        $order->creatable()->associate($user)->save();
        $order->products()->attach($productsId);
    }

    public function getAllOrder()
    {
        return Order::all();
    }



    public function getOrderById($id)
    {
        return Order::find($id);
    }
}
