<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProviderController extends Controller
{
    public function index()
    {
        $providers = providers::all();

        return view('administrador.provider')->with('providers');
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
        $providers = new providers();

        $providers->id = $request->get('id');
        $providers->brand_provider = $request->get('brand_provider');
        $providers->web_address = $request->get('web_address');
        $providers->phone = $request->get('phone');

        $providers->save();

        return redirect('/administrador/provider');
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
        $provider = providers::find($id);
        return view('administrador.provider')->with('provider',$provider);
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
        $providers = providers::find($id);

        $providers->brand_provider = $request->get('brand_provider');
        $providers->web_address = $request->get('web_address');
        $providers->phone = $request->get('phone');

        $providers->save();

        return redirect('/administrador/provider');
    }
/**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Discussion $id)
    {
        $providers = providers::find($id);
        $providers->delete();
        
        return redirect('/administrador/provider');
    }
}
