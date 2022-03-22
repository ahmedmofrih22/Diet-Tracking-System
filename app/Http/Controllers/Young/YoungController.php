<?php

namespace App\Http\Controllers\Young;

use App\Abdominal_Circumference;
use App\Categorie;
use App\Client;
use App\Fat_Percentage;
use App\Height;
use App\Http\Controllers\Controller;
use App\Weight;
use Illuminate\Http\Request;

class YoungController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $client = Client::all();
        $Categorie = Categorie::where('name', 'Young')->first();
        $Abdominal_Circumference = Abdominal_Circumference::where('Categore_id', 2)->get();
        $Fat_Percentage = Fat_Percentage::where('Categore_id', 2)->get();
        $Height = Height::where('Categore_id', 2)->get();
        $Weight = Weight::where('Categore_id', 2)->get();

        return view('Categore.Young.index', compact('client', 'Weight', 'Height', 'Categorie', 'Abdominal_Circumference', 'Fat_Percentage'));
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
