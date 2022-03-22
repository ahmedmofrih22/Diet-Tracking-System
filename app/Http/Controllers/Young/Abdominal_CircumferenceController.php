<?php



namespace App\Http\Controllers\Young;

use App\Http\Controllers\Controller;
use App\Abdominal_Circumference;
use App\Categorie;
use App\Client;
use Illuminate\Http\Request;

class Abdominal_CircumferenceController extends Controller
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
        $Categore  = Categorie::all();
        $Client = Client::all();
        return view('Categore.Young.Abdominal_Circumference.Add_Abdominal_Circumference', compact('Client', 'Categore'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {


        $Abdominl = new Abdominal_Circumference();

        $Abdominl->Ocean_Poison = $request->Ocean_Poison;
        $Abdominl->Client_id  = $request->Client_id;
        $Abdominl->Cause_Harm = $request->Cause_Harm;
        $Abdominl->Does_No_Harm = $request->Does_No_Harm;
        $Abdominl->Categore_id = $request->Categore_id;
        $Abdominl->Notes = $request->Notes;


        $Abdominl->save();
        return redirect()->route('Young.index')
            ->with('success', 'Abdominal_Circumference created successfully');
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
        $Categore  = Categorie::all();
        $Abdominl = Abdominal_Circumference::find($id);
        $Client = Client::all();
        return view('Categore.Young.Abdominal_Circumference.edit', compact('Client', 'Abdominl', 'Categore'));
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
        $Abdominl =  Abdominal_Circumference::find($request->id);

        $Abdominl->Ocean_Poison = $request->Ocean_Poison;
        $Abdominl->Client_id  = $request->Client_id;
        $Abdominl->Cause_Harm = $request->Cause_Harm;
        $Abdominl->Does_No_Harm = $request->Does_No_Harm;
        $Abdominl->Categore_id = $request->Categore_id;
        $Abdominl->Notes = $request->Notes;


        $Abdominl->save();
        return redirect()->route('Young.index')
            ->with('update', 'Abdominal_Circumference created successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        Abdominal_Circumference::find($request->id)->delete();

        return redirect()->route('Young.index')
            ->with('delete', 'Abdominal_Circumference delete successfully');
    }
}
