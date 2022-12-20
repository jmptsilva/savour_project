<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\User;
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
        $orders = Order::select(DB::raw('SUM(ordered_offers.price * ordered_offers.quantity) as Total'))
            ->join('offers', 'offers.id', '=', 'ordered_offers.offer_id')
            ->whereDay('created_at', "$day")
            ->where('offers.restaurant_id', '=', $id)
            ->get();

        /* dd($orders); */
        return  $orders->tojson(JSON_PRETTY_PRINT);
    }

    public function order_history_today($id)
    {
        $orders = Order::select(DB::raw('SUM(ordered_offers.price * ordered_offers.quantity) as Total'))
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

    public function user_active_orders($id)
    {
        $orders = User::select('orders.id','orders.created_at', 'restaurants.name', 'restaurants.address', 'restaurants.postal_code', 'restaurants.city', DB::raw('sum(ordered_offers.price * ordered_offers.quantity) as total'))
        ->join('orders', 'orders.user_id', '=', 'users.id')
        ->join('ordered_offers', 'ordered_offers.order_id', '=', 'orders.id')
        ->join('offers', 'offers.id', '=', 'ordered_offers.offer_id')
        ->join('restaurants', 'restaurants.id', '=', 'offers.restaurant_id')
        ->where('offers.restaurant_id', '=', $id)
        ->where('orders.is_closed', '=', 0)
        ->groupBy('orders.id', 'restaurants.name', 'restaurants.address','orders.created_at', 'users.email', 'restaurants.postal_code', 'restaurants.city')
        ->get();

        /* dd($orders); */
        return  $orders->tojson(JSON_PRETTY_PRINT);
    }

    public function active_order_by_restaurant($id)
    {
        $orders = User::select('orders.id','orders.created_at', 'users.email', 'users.first_name','users.last_name', DB::raw('sum(ordered_offers.price * ordered_offers.quantity) as total'))
            ->join('orders', 'orders.user_id', '=', 'users.id')
            ->join('ordered_offers', 'ordered_offers.order_id', '=', 'orders.id')
            ->join('offers', 'offers.id', '=', 'ordered_offers.offer_id')
            ->where('offers.restaurant_id', '=', $id)
            ->where('orders.is_closed', '=', 0)
            ->groupBy('orders.id','users.first_name','users.last_name','orders.created_at', 'users.email')
            ->get();
        return  $orders->tojson(JSON_PRETTY_PRINT);
    }

    public function active_order_detail($id)
    {
        $orders = User::select('orders.id','orders.created_at', 'users.email', 'users.first_name','users.last_name','ordered_offers.price','ordered_offers.quantity','offers.name')
            ->join('orders', 'orders.user_id', '=', 'users.id')
            ->join('ordered_offers', 'ordered_offers.order_id', '=', 'orders.id')
            ->join('offers', 'offers.id', '=', 'ordered_offers.offer_id')
            ->where('orders.id', '=', $id)
            ->get();
        return  $orders->tojson(JSON_PRETTY_PRINT);
    }

    public function user_orders($id)
    {
        $orders = User::select('orders.id','orders.created_at', 'users.email', 'users.first_name','users.last_name','ordered_offers.price','ordered_offers.quantity','offers.name')
            ->join('orders', 'orders.user_id', '=', 'users.id')
            ->join('ordered_offers', 'ordered_offers.order_id', '=', 'orders.id')
            ->join('offers', 'offers.id', '=', 'ordered_offers.offer_id')
            ->where('orders.id', '=', $id)
            ->get();
        return  $orders->tojson(JSON_PRETTY_PRINT);
    }

}
