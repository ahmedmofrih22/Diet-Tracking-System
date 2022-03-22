<?php

namespace App\Http\Controllers\Elderly;

use App\Categorie;
use App\Http\Controllers\Controller;

use App\Client;
use App\Weight;
use Illuminate\Http\Request;

class WeightController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $Categore = Categorie::all();
        $Client = Client::all();
        return view('Categore.Elderly.Weight.Add_Weight', compact('Client', 'Categore'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $Weight = new Weight();

        $Weight->Weight_kg = $request->Weight_kg;
        $Weight->id_Client   = $request->id_Client;
        $Weight->Plus = $request->Plus;
        $Weight->Minus = $request->Minus;
        $Weight->Notes = $request->Notes;
        $Weight->Needs_A_Diet = $request->Needs_A_Diet;
        $Weight->Needs_Nourishment = $request->Needs_Nourishment;
        $Weight->Categore_id = $request->Categore_id;


        $Weight->save();
        return redirect()->route('Elderly.index')
            ->with('success', 'Weight created successfully');
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
        $Categore = Categorie::all();
        $Weight = Weight::find($id);
        $Client = Client::all();
        return view('Categore.Elderly.Weight.edit', compact('Client', 'Weight', 'Categore'));
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
        $Weight = Weight::find($request->id);

        $Weight->Weight_kg = $request->Weight_kg;
        $Weight->id_Client   = $request->id_Client;
        $Weight->Plus = $request->Plus;
        $Weight->Minus = $request->Minus;
        $Weight->Notes = $request->Notes;
        $Weight->Needs_A_Diet = $request->Needs_A_Diet;
        $Weight->Needs_Nourishment = $request->Needs_Nourishment;
        $Weight->Categore_id = $request->Categore_id;


        $Weight->save();
        return redirect()->route('Elderly.index')
            ->with('update', 'Weight update successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        Weight::find($request->id)->delete();
        return redirect()->route('Elderly.index')
            ->with('delete', 'Weight delete successfully');
    }
}
