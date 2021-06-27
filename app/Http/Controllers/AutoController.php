<?php

namespace App\Http\Controllers;

use App\Models\Auto;
use Illuminate\Http\Request;

class AutoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $autos['autos']=Auto::simplePaginate(10);

        return view('administrador.auto',$autos);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('create.createauto');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $fields=[
            'id'=>'required|string|max:100',
            'provider_id'=>'required|string|max:100',
            'color'=>'required|string|max:100',
            'capacity'=>'required|string|max:100',
            'plate_no'=>'required|string|max:100',
            'price'=>'required|string|max:100',
        ];
        $message=[
            'required'=>'the :attribute required',
        ];

        $this->validate($request,$fields,$message);


        $autos = new Auto();

        $autos->id = $request->get('id');
        $autos->provider_id = $request->get('provider_id');
        $autos->color = $request->get('color');
        $autos->capacity = $request->get('capacity');
        $autos->plate_no = $request->get('plate_no');
        $autos->price = $request->get('price');

        $autos->save();

        return redirect('/auto');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Auto  $auto
     * @return \Illuminate\Http\Response
     */
    public function show(Auto $auto)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Auto  $auto
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $auto = Auto::find($id);
        return view('edit.editauto')->with('auto',$auto);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Auto  $auto
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $autos = Auto::find($id);

        $autos->provider_id = $request->get('provider_id');
        $autos->color = $request->get('color');
        $autos->capacity = $request->get('capacity');
        $autos->plate_no = $request->get('plate_no');
        $autos->price = $request->get('price');

        $autos->save();

        return redirect('/auto');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Auto  $auto
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Auto::destroy($id);
        return redirect('auto');
    }
}
