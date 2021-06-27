<?php

namespace App\Http\Controllers;

use App\Models\Reviews;
use Illuminate\Http\Request;

class ReviewsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $reviews['reviews']=Reviews::simplePaginate(10);

        return view('administrador.review',$reviews);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('create.createreview');
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
            'rental_id'=>'required|string|max:100',
            'qualification'=>'required|string|max:100',
            'comment'=>'required|string|max:100',
            'date'=>'required|date',
        ];

        $message=[
            'required'=>'the :attribute required',
        ];

        $this->validate($request,$validate,$message);

        $reviews = new Reviews();

        $reviews->id = $request->get('id');
        $reviews->user_id = $request->get('user_id');
        $reviews->rental_id = $request->get('rental_id');
        $reviews->qualification = $request->get('qualification');
        $reviews->comment = $request->get('comment');
        $reviews->date = $request->get('date');

        $reviews->save();

        return redirect('review');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Reviews  $reviews
     * @return \Illuminate\Http\Response
     */
    public function show(Reviews $reviews)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Reviews  $reviews
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $review = Reviews::find($id);
        return view('edit.editreview')->with('review',$review);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Reviews  $reviews
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $reviews = Reviews::find($id);

        $reviews->user_id = $request->get('user_id');
        $reviews->rental_id = $request->get('rental_id');
        $reviews->qualification = $request->get('qualification');
        $reviews->comment = $request->get('comment');
        $reviews->date = $request->get('date');


        $reviews->save();

        return redirect('/review');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Reviews  $reviews
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Reviews::destroy($id);
        return redirect('review');
    }
}
