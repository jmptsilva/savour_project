<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class WelcomeController extends Controller
{
    public function create()
    {
        $soldMeals = DB::table('orders')->count();

        return view('/welcome/welcome', ['soldMeals' => $soldMeals]);
    }
}
