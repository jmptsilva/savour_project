<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class OrderController extends Controller
{
    public function order_history_by_restaurant($id)
    {
        $orders = Order::select(DB::raw('SUM(ordered_offers.price * ordered_offers.quantity) as Total'))
            ->join('offers', 'offers.id', '=', 'ordered_offers.offer_id')
            ->where('offers.restaurant_id', '=', $id)
            ->get();

        /* dd($orders); */
        return  $orders->tojson(JSON_PRETTY_PRINT);
    }

    public function order_history_day($id, $day)
    {
        $orders = Order::select(DB::raw('SUM(price * quantity) as Total'))
            ->join('offers', 'offers.id', '=', 'ordered_offers.offer_id')
            ->whereDay('created_at', "$day")
            ->where('offers.restaurant_id', '=', $id)
            ->get();

        /* dd($orders); */
        return  $orders->tojson(JSON_PRETTY_PRINT);
    }
}
