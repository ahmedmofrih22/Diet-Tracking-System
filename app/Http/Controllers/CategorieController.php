<?php

namespace App\Http\Controllers;

use App\Abdominal_Circumference;
use App\Categorie;
use App\Client;
use App\Fat_Percentage;
use App\Height;
use App\Weight;
use Illuminate\Http\Request;

class CategorieController extends Controller
{

    public function index()
    {
        $client = Client::all();
        $Categorie = Categorie::all();
        $Abdominal_Circumference = Abdominal_Circumference::all();
        $Fat_Percentage = Fat_Percentage::all();
        $Height = Height::all();
        $Weight = Weight::all();

        return view('Categore.Categore', compact('Categorie', 'client', 'Weight', 'Height', 'Abdominal_Circumference', 'Fat_Percentage'));
    }

    ////////// create_Add_Abdominal_Circumference
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
