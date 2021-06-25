<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    public function index()
    {
        $users['users']=User::paginate(10);

        return view('administrador.Users',$users);
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
        $users = new User();

        $users->id = $request->get('id');
        $users->name = $request->get('name');
        $users->user_type = $request->get('user_type');
        $users->last_name = $request->get('last_name');
        $users->image = $request->get('email');
        $users->password = $request->get('address');
        $users->phone = $request->get('phone');

        $users->save();

        return redirect('/administrador/Users');
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
        $user = User::find($id);
        return view('administrador.Users')->with('user',$user);
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
        $users = User::find($id);

        $users->name = $request->get('name');
        $users->user_type = $request->get('user_type');
        $users->last_name = $request->get('last_name');
        $users->image = $request->get('email');
        $users->password = $request->get('address');
        $users->phone = $request->get('phone');

        $users->save();

        return redirect('/administrador/Users');
    }
/**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Discussion $id)
    {
        $users = User::find($id);
        $users->delete();
        
        return redirect('/administrador/Users');
    }
}
