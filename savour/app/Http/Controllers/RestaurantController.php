<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreRestaurantRequest;
use App\Http\Requests\StoreOfferRequest;
use Illuminate\Http\Request;
use App\Models\Restaurant;
use App\Models\Offer;

class RestaurantController extends Controller
{


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */


    // Retrieve the info of all restaurants

    public function all_restaurants()
    {
        $restaurants = Restaurant::all();

        return $restaurants->tojson(JSON_PRETTY_PRINT);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    // Retrieve the info from a restaurant by ID
    public function find_by_id($id)
    {
        $restaurant = Restaurant::find($id)->first();

        return $restaurant->tojson(JSON_PRETTY_PRINT);
    }

    // Retrieve the info from a restaurant by name
    public function find_by_name($name)
    {
        $restaurant = Restaurant::where('name', 'like', "%$name%")->get();

        return $restaurant->tojson(JSON_PRETTY_PRINT);
    }

    // Retrieve the info from a restaurant by location
    public function find_by_location($location)
    {
        $restaurant = Restaurant::where('location', 'like', "%$location%")->get();

        return $restaurant->tojson(JSON_PRETTY_PRINT);
    }

    public function edit()
    {
        return view('restaurant.profile.edit');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */


    // Update the info from a restaurant by location
    public function update(StoreRestaurantRequest $request, $id)
    {
        $request->validate();

        $restaurant = Restaurant::find($id);

        $restaurant->name = $request->name;
        $restaurant->email = $request->email;
        $restaurant->phone_number = $request->phone_number;
        $restaurant->address = $request->address;
        $restaurant->city = $request->city;
        $restaurant->postal_code = $request->postal_code;

        $result = $restaurant->save();

        if ($result) {
            return redirect(route('restaurant.dashboard'))->with('message', 'Successfully updated your profile.');
        } else {
            return back()->with('message', 'Sorry, something went wrong. Please try again.');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    public function destroy($id)
    {
        //
    }
}
