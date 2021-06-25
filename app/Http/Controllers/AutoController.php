<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AutoController extends Controller
{
    public function index()
    {
        $autos = autos::all();

        return view('administrador.autos')->with('autos');
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
        $autos = new autos();

        $autos->id = $request->get('id');
        $autos->provider_id = $request->get('provider_id');
        $autos->color = $request->get('color');
        $autos->capacity = $request->get('capacity');
        $autos->plate_no = $request->get('plate_no');
        $autos->price = $request->get('price');

        $autos->save();

        return redirect('/administrador/auto');
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
        $auto = autos::find($id);
        return view('administrador.auto')->with('auto',$auto);
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
        $autos = autos::find($id);

        $autos->provider_id = $request->get('provider_id');
        $autos->color = $request->get('color');
        $autos->capacity = $request->get('capacity');
        $autos->plate_no = $request->get('plate_no');
        $autos->price = $request->get('price');

        $autos->save();

        return redirect('/administrador/auto');
    }
/**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Discussion $id)
    {
        $autos = autos::find($id);
        $autos->delete();
        
        return redirect('/administrador/auto');
    }
}
