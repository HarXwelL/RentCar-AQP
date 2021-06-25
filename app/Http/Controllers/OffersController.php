<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OffersController extends Controller
{
    public function index()
    {
        $offers = offers::all();

        return view('administrador.offers')->with('offers');
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $offers = new offers();

        $offers->id = $request->get('id');
        $offers->provider_id = $request->get('provider_id');
        $offers->offer_name = $request->get('offer_name');
        $offers->date = $request->get('date');
        $offers->discount = $request->get('discount');

        $offers->save();

        return redirect('/administrador/offers');
    }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Discussion $id)
    {
        //
    }
/**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Discussion $id)
    {
        $offer = offers::find($id);
        return view('administrador.offers')->with('offer',$offer);
    }
/**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Discussion $id)
    {
        $offers = offers::find($id);

        $offers->id = $request->get('id');
        $offers->provider_id = $request->get('provider_id');
        $offers->offer_name = $request->get('offer_name');
        $offers->date = $request->get('date');
        $offers->discount = $request->get('discount');

        $offers->save();

        return redirect('/administrador/offers');
    }
/**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Discussion $id)
    {
        $offers = offers::find($id);
        $offers->delete();
        
        return redirect('/administrador/offers');
    }
}
