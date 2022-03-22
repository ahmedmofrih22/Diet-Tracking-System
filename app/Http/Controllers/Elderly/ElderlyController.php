<?php

namespace App\Http\Controllers\Elderly;

use App\Abdominal_Circumference;
use App\Categorie;
use App\Client;
use App\Fat_Percentage;
use App\Height;
use App\Http\Controllers\Controller;
use App\Weight;
use Illuminate\Http\Request;

class ElderlyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $client = Client::all();
        $Categorie = Categorie::where('name', 'Elderly')->first();
        $Abdominal_Circumference = Abdominal_Circumference::where('Categore_id', 3)->get();
        $Fat_Percentage = Fat_Percentage::where('Categore_id', 3)->get();
        $Height = Height::where('Categore_id', 3)->get();
        $Weight = Weight::where('Categore_id', 3)->get();

        return view('Categore.Elderly.index', compact('client', 'Weight', 'Categorie', 'Height', 'Abdominal_Circumference', 'Fat_Percentage'));
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
