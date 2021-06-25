<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RentalController extends Controller
{
    public function index()
    {
        $rentals = rentals::all();

        return view('administrador.Rental')->with('rentals');
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
        $rentals = new rentals();

        $rentals->id = $request->get('id');
        $rentals->user_id = $request->get('user_id');
        $rentals->auto_id = $request->get('auto_id');
        $rentals->payment_type = $request->get('payment_type');
        $rentals->start_date = $request->get('start_date');

        $rentals->save();

        return redirect('/administrador/Rental');
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
        $rental = rentals::find($id);
        return view('administrador.Rental')->with('rental',$rental);
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
        $rentals = rentals::find($id);

        $rentals->user_id = $request->get('user_id');
        $rentals->auto_id = $request->get('auto_id');
        $rentals->payment_type = $request->get('payment_type');
        $rentals->start_date = $request->get('start_date');

        $rentals->save();

        return redirect('/administrador/Rental');
    }
/**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Discussion $id)
    {
        $rentals = rentals::find($id);
        $rentals->delete();

        return redirect('/administrador/Rental');
    }
}
