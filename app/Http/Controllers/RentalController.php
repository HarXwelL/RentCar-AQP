<?php

namespace App\Http\Controllers;

use App\Models\Rental;
use Illuminate\Http\Request;

class RentalController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $rentals['rentals']=Rental::simplePaginate(10);

        return view('administrador.Rental',$rentals);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('create.createrental');
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
            'user_id'=>'required|string|max:100',
            'auto_id'=>'required|string|max:100',
            'payment_type'=>'required|string|max:100',
            'start_date'=>'required|string|max:100',
        ];

        $message=[
            'required'=>'the :attribute required',
        ];

        $this->validate($request,$validate,$message);

        $rentals = new Rental();

        $rentals->id = $request->get('id');
        $rentals->user_id = $request->get('user_id');
        $rentals->auto_id = $request->get('auto_id');
        $rentals->payment_type = $request->get('payment_type');
        $rentals->start_date = $request->get('start_date');

        $rentals->save();

        return redirect('Rental');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Rental  $rental
     * @return \Illuminate\Http\Response
     */
    public function show(Rental $rental)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Rental  $rental
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $rental = Rental::find($id);
        return view('edit.editrental')->with('rental',$rental);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Rental  $rental
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $rentals = Rental::find($id);

        $rentals->user_id = $request->get('user_id');
        $rentals->auto_id = $request->get('auto_id');
        $rentals->payment_type = $request->get('payment_type');
        $rentals->start_date = $request->get('start_date');

        $rentals->save();

        return redirect('/Rental');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Rental  $rental
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Rental::destroy($id);
        return redirect('Rental');
    }
}
