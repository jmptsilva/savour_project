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

    public function order_history_today($id)
    {
        $orders = Order::select(DB::raw('SUM(price * quantity) as Total'))
        ->join('offers', 'offers.id', '=', 'ordered_offers.offer_id')
        ->where('offers.restaurant_id', '=', $id)
            ->whereDate('created_at', '=', date('d.m.Y'))
            ->get();

        /* dd($orders); */
        return  $orders->tojson(JSON_PRETTY_PRINT);
    }

    public function order_history_weekdays($id)
    {
        for ($i=0; $i < 7; $i++) { 
            $orders[$i] = Order::select(DB::raw('SUM(ordered_offers.price * ordered_offers.quantity) as Total'))
            ->join('offers', 'offers.id', '=', 'ordered_offers.offer_id')
            ->where('offers.restaurant_id', '=', $id)
            ->whereDate('ordered_offers.created_at', '=', date('d.m.Y',strtotime("-$i")))
            ->get();
        }
        
        /* dd($orders); */
        return  $orders;
    }

    public function order_history_breakfast($id)
    {
        $orders = Order::select(DB::raw('SUM(ordered_offers.price * ordered_offers.quantity) as Total'))
        ->join('offers', 'offers.id', '=', 'ordered_offers.offer_id')
        ->where('offers.restaurant_id', '=', $id)
            ->whereDate('ordered_offers.created_at', '>', date('d.m.Y 00:00:00'))
            ->whereDate('ordered_offers.created_at', '<', date('d.m.Y 11:00:00'))
            ->get();

        /* dd($orders); */
        return  $orders->tojson(JSON_PRETTY_PRINT);
    }

    public function order_history_lunch($id)
    {
        $orders = Order::select(DB::raw('SUM(ordered_offers.price * ordered_offers.quantity) as Total'))
        ->join('offers', 'offers.id', '=', 'ordered_offers.offer_id')
        ->where('offers.restaurant_id', '=', $id)
            ->whereDate('ordered_offers.created_at', '>', date('d.m.Y 11:00:00'))
            ->whereDate('ordered_offers.created_at', '<', date('d.m.Y 17:00:00'))
            ->get();

        /* dd($orders); */
        return  $orders->tojson(JSON_PRETTY_PRINT);
    }

    public function order_history_dinner($id)
    {
        $orders = Order::select(DB::raw('SUM(ordered_offers.price * ordered_offers.quantity) as Total'))
        ->join('offers', 'offers.id', '=', 'ordered_offers.offer_id')
        ->where('offers.restaurant_id', '=', $id)
            ->whereDate('ordered_offers.created_at', '>', date('d.m.Y 17:00:00'))
            ->whereDate('ordered_offers.created_at', '<', date('d.m.Y 23:59:00'))
            ->get();

        /* dd($orders); */
        return  $orders->tojson(JSON_PRETTY_PRINT);
    }
}
