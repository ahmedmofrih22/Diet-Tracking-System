<?php

namespace App\Http\Controllers;

use App\Abdominal_Circumference;
use App\Client;
use App\Fat_Percentage;
use App\Height;
use App\Weight;
use Illuminate\Http\Request;

class CeckController extends Controller


{


    public function index()
    {
    }


    public function store(Request $request)
    {


        $National_ID = $request->National_ID;

        if ($Clients = Client::where('National_ID', $National_ID)->where('Status', 'مفعل')->first()) {
            $id2 = $Clients->id;


            $Abdominal_Circumference = Abdominal_Circumference::where('Client_id', $id2)->get();

            $Fat_Percentage = Fat_Percentage::where('Client_number', $id2)->get();
            $Height = Height::where('Client__Id', $id2)->get();
            $Weight = Weight::where('id_Client', $id2)->get();

            return view('Client.CeckNational_ID_Index', compact('Abdominal_Circumference', 'Height', 'Weight', 'Fat_Percentage'));
        } else {
            return redirect()->back();
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
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
