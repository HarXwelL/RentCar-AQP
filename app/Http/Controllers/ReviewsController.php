<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ReviewsController extends Controller
{
    public function index()
    {
        $reviews = reviews::all();

        return view('administrador.review')->with('reviews');
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
        $reviews = new reviews();

        $reviews->id = $request->get('id');
        $reviews->user_id = $request->get('user_id');
        $reviews->rental_id = $request->get('rental_id');
        $reviews->qualification = $request->get('qualification');
        $reviews->comment = $request->get('comment');
        $reviews->date = $request->get('date');

        $reviews->save();

        return redirect('/administrador/review');
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
        $review = reviews::find($id);
        return view('administrador.review')->with('review',$review);
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
        $review = reviews::find($id);

        $reviews->user_id = $request->get('user_id');
        $reviews->rental_id = $request->get('rental_id');
        $reviews->qualification = $request->get('qualification');
        $reviews->comment = $request->get('comment');
        $reviews->date = $request->get('date');


        $reviews->save();

        return redirect('/administrador/review');
    }
/**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Discussion $id)
    {
        $reviews = reviews::find($id);
        $reviews->delete();
        
        return redirect('/administrador/review');
    }
}
