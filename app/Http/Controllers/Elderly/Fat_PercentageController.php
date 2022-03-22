<?php

namespace App\Http\Controllers\Elderly;

use App\Categorie;
use App\Http\Controllers\Controller;

use App\Client;
use App\Fat_Percentage;
use Illuminate\Http\Request;

class Fat_PercentageController extends Controller
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
        return view('Categore.Elderly.Fat_Percentage.Add_Fat_Percentage', compact('Client', 'Categore'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $Fat_Percentage = new Fat_Percentage();

        $Fat_Percentage->The_Ratio = $request->The_Ratio;
        $Fat_Percentage->Client_number  = $request->Client_number;
        $Fat_Percentage->Fat_Type = $request->Fat_Type;
        $Fat_Percentage->You_Need_Medical_Advice = $request->You_Need_Medical_Advice;
        $Fat_Percentage->You_Do_Not_Need_Medical_Advice = $request->You_Do_Not_Need_Medical_Advice;
        $Fat_Percentage->Notes = $request->Notes;
        $Fat_Percentage->Categore_id = $request->Categore_id;


        $Fat_Percentage->save();
        return redirect()->route('Elderly.index')
            ->with('success', 'Fat_Percentage created successfully');
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
        $Fat_Percentage = Fat_Percentage::find($id);
        $Client = Client::all();
        return view('Categore.Elderly.Fat_Percentage.edit', compact('Fat_Percentage', 'Categore', 'Client'));
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
        $Fat_Percentage =  Fat_Percentage::find($request->id);

        $Fat_Percentage->The_Ratio = $request->The_Ratio;
        $Fat_Percentage->Client_number  = $request->Client_number;
        $Fat_Percentage->Fat_Type = $request->Fat_Type;
        $Fat_Percentage->You_Need_Medical_Advice = $request->You_Need_Medical_Advice;
        $Fat_Percentage->You_Do_Not_Need_Medical_Advice = $request->You_Do_Not_Need_Medical_Advice;
        $Fat_Percentage->Notes = $request->Notes;
        $Fat_Percentage->Categore_id = $request->Categore_id;


        $Fat_Percentage->save();
        return redirect()->route('Elderly.index')
            ->with('update', 'Fat_Percentage created successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        Fat_Percentage::find($request->id)->delete();

        return redirect()->route('Elderly.index')
            ->with('delete', 'Fat_Percentage delete successfully');
    }
}
