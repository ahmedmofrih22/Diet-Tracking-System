<?php

namespace App\Http\Controllers;

use App\Categorie;
use App\Specialization;
use App\User;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    //index
    public function index()
    {
        $users = User::all();
        $Specialties = Specialization::all();

        return view('User.index', compact('users', 'Specialties'));
    }

    //create
    public function create()
    {
        $Specialties = Specialization::all();
        $categories = Categorie::all();
        return view('User.Add_user', compact('Specialties', 'categories'));
    }


    ///Add
    public function Add_user(Request $request)
    {
        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->Specialization_id = $request->Specialization_id;
        $user->categorie_id = $request->categorie_id;
        $user['password'] = Hash::make($request['password']);
        $user->save();
        return redirect()->route('user.index')
            ->with('success', 'User created successfully');
    }

    //store
    public function store(Request $request)
    {
        //
    }

    //show
    public function show($id)
    {
        //
    }

    //edit
    public function edit($id)
    {
        $user = User::find($id);
        $Specialties = Specialization::all();
        $categories = Categorie::all();
        return view('user.edit', compact('user', 'Specialties', 'categories'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {


        $user = User::find($request->id);
        $user->name = $request->name;
        $user->email = $request->email;
        $user->Specialization_id = $request->Specialization_id;
        $user->categorie_id = $request->categorie_id;

        $user->password = Hash::make($request->password);
        $user->save();
        return redirect()->route('user.index')
            ->with('update', 'User update successfully');;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {


        User::find($request->id)->delete();
        return redirect()->route('user.index')
            ->with('delete', 'User delete successfully');
    }
}
