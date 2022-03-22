<?php

namespace App\Http\Controllers\children;

use App\Categorie;
use App\Http\Controllers\Controller;

use App\Client;
use App\Height;
use Illuminate\Http\Request;

class HeightController extends Controller
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
        return view('Categore.children.Height.Add_Height', compact('Client', 'Categore'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {


        $Height = new Height();

        $Height->Height_Cm = $request->Height_Cm;
        $Height->Client__Id   = $request->Client__Id;
        $Height->Natural = $request->Natural;
        $Height->Abnormal = $request->Abnormal;
        $Height->Categore_id = $request->Categore_id;
        $Height->Notes = $request->Notes;


        $Height->save();
        return redirect()->route('children.index')
            ->with('success', 'Height created successfully');
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
        $Height = Height::find($id);
        $Categore = Categorie::all();
        $Client = Client::all();
        return view('Categore.children.Height.edit', compact('Height', 'Client', 'Categore'));
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
        $Height =  Height::find($request->id);

        $Height->Height_Cm = $request->Height_Cm;
        $Height->Client__Id   = $request->Client__Id;
        $Height->Natural = $request->Natural;
        $Height->Abnormal = $request->Abnormal;
        $Height->Categore_id = $request->Categore_id;
        $Height->Notes = $request->Notes;


        $Height->save();
        return redirect()->route('children.index')
            ->with('update', 'Height created successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request  $request)
    {
        Height::find($request->id)->delete();
        return redirect()->route('children.index')
            ->with('delete', 'Height created successfully');
    }
}
