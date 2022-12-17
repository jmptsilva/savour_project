<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Http\Controllers\Controller;
use App\Models\Offer;
use Illuminate\Validation\Rules;
use App\Http\Requests\StoreOfferRequest;

class OfferController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    // QUERY ALL OFFERS FROM RESTAURANT ID
    public function all_from_restaurant($id)
    {
        $offers = Offer::where('restaurant_id', '=', $id)->get();

        return $offers->tojson(JSON_PRETTY_PRINT);  //CHANGE RETURN VIEW CHOOSE WITH TEAM
    }

    // QUERY ALL ACTIVE OFFERS
    public function all_active()
    {
        $offers = Offer::where('is_active', '=', '1')->get();

        return $offers->tojson(JSON_PRETTY_PRINT);  //CHANGE RETURN VIEW CHOOSE WITH TEAM
    }

    // QUERY ALL ACTIVE OFFERS FROM RESTAURANT ID
    public function all_active_from_restaurant($id)
    {
        $offers = Offer::where([['is_active','=','1'],['restaurant_id','=', $id]])->get();

        return $offers->tojson(JSON_PRETTY_PRINT);  //CHANGE RETURN VIEW CHOOSE WITH TEAM
    }

    // QUERY ALL INACTIVE OFFERS FROM RESTAURANT ID
    public function all_inactive_from_restaurant($id)
    {
        $offers = Offer::where([['is_active', '=', '0'],['restaurant_id', '=', $id]])->get();

        return $offers->tojson(JSON_PRETTY_PRINT);  //CHANGE RETURN VIEW CHOOSE WITH TEAM
    }

    //QUERY ALL BY NAME OR 
    public function offer_name($name)
    {
        $offers = Offer::where('name', 'like', "%$name%")->get();
           
        return $offers->tojson(JSON_PRETTY_PRINT);  //CHANGE RETURN VIEW CHOOSE WITH TEAM IT CAN ALSO  BE RETURN AS AN JSON LIKE IN THE EXEMPLE return $offers->tojson(JSON_PRETTY_PRINT);
    }

    //QUERY ALL ORDER BY CREATE_AT DESC AND ONLY 8 RESULTS SORTED 
    public function last_added_offers()
    {
        $offers = Offer::orderByDesc('created_at')->limit(8)->get(); //CHECK CODE IT CAN BE orderBy('created_at', 'desc')

        return $offers->tojson(JSON_PRETTY_PRINT);  //CHANGE RETURN VIEW CHOOSE WITH TEAM IT CAN ALSO  BE RETURN AS AN JSON LIKE IN THE EXEMPLE return $offers->tojson(JSON_PRETTY_PRINT);
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('new-offer');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    
    public function store(StoreOfferRequest $request, $id)
    {
        $request->validate();
    
        $offer = Offer::create([
            'restaurant_id' => Auth::user()->id, // we will always have to send the Auth id value, from the user session. Is this ok?
            'description' => $request->description,
            'name' => $request->name,
            'image' => $request->image,
            'quantity' => $request->quantity,
            'price' => $request->price,
            'is_active' => $request->is_active,
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
       // 
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return view('restaurant/customMenu');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    public function update(StoreOfferRequest $request, $id)
    {
        $request->validate();

        $offer = Offer::find($id);

        $offer->name = $request->name;
        $offer->price = $request->price;
        $offer->description = $request->description;
        $offer->image = $request->image;
        $offer->quantity = $request->quantity;
        $offer->is_active = $request->is_active;
        $result = $offer->save();

        if ($result)
            return redirect('/offers')->with('message', $request->name . ' updated successfully.');
        else
            return "problem updating";
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $result = Offer::destroy($id);

        if ($result)
            return redirect('/offers')->with('message', 'offer deleted successfully.');
        else
            return redirect('/offers')->with('error', 'Problem deleted the offer');
    }
}
