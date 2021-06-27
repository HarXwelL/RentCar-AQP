<?php

namespace App\Http\Controllers;

use App\Models\Provider;
use Illuminate\Http\Request;

class ProviderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $providers['providers']=Provider::simplePaginate(10);

        return view('administrador.provider',$providers);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('create.createprovider');
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
            'brand_provider'=>'required|string|max:100',
            'web_address'=>'required|string|max:100',
            'phone'=>'required|string|max:100',
        ];

        $message=[
            'required'=>'the :attribute required',
        ];

        $this->validate($request,$validate,$message);

        $providers = new Provider();

        $providers->id = $request->get('id');
        $providers->brand_provider = $request->get('brand_provider');
        $providers->web_address = $request->get('web_address');
        $providers->phone = $request->get('phone');

        $providers->save();

        return redirect('provider');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Provider  $provider
     * @return \Illuminate\Http\Response
     */
    public function show(Provider $provider)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Provider  $provider
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $provider = Provider::find($id);
        return view('edit.editprovider')->with('provider',$provider);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Provider  $provider
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $providers = Provider::find($id);

        $providers->brand_provider = $request->get('brand_provider');
        $providers->web_address = $request->get('web_address');
        $providers->phone = $request->get('phone');

        $providers->save();

        return redirect('/provider');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Provider  $provider
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Provider::destroy($id);
        return redirect('provider');
    }
}
