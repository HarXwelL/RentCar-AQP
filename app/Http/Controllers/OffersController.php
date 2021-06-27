<?php

namespace App\Http\Controllers;

use App\Models\Offers;
use Illuminate\Http\Request;

class OffersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $offers['offers']=Offers::simplePaginate(10);

        return view('administrador.offers',$offers);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('create.createoffers');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validate=[
            'id'=>'required|string|max:100',
            'provider_id'=>'required|string|max:100',
            'offer_name'=>'required|string|max:100',
            'date'=>'required|date',
            'discount'=>'required|string|max:100',
        ];
        $message=[
            'required'=>'the :attribute required',
        ];

        $this->validate($request,$validate,$message);

        $offers = new Offers();

        $offers->id = $request->get('id');
        $offers->provider_id = $request->get('provider_id');
        $offers->offer_name = $request->get('offer_name');
        $offers->date = $request->get('date');
        $offers->discount = $request->get('discount');

        $offers->save();

        return redirect('/Offers');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Offers  $offers
     * @return \Illuminate\Http\Response
     */
    public function show(Offers $offers)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Offers  $offers
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $offer = Offers::find($id);
        return view('edit.editoffers')->with('offer',$offer);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Offers  $offers
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $offers = Offers::find($id);

        $offers->id = $request->get('id');
        $offers->provider_id = $request->get('provider_id');
        $offers->offer_name = $request->get('offer_name');
        $offers->date = $request->get('date');
        $offers->discount = $request->get('discount');

        $offers->save();

        return redirect('/Offers');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Offers  $offers
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Offers::destroy($id);
        return redirect('Offers');
    }
}
