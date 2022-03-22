<?php

namespace App\Http\Controllers;

use App\Abdominal_Circumference;
use App\Categorie;
use App\Client;
use App\Exports\ClientExport;
use App\Exports\UsersExport;
use App\Fat_Percentage;
use App\Height;
use App\Weight;
use COM;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Laravel\Ui\Presets\React;
use Maatwebsite\Excel\Facades\Excel;

class ClientController extends Controller
{
    function __construct()
    {
        $this->middleware('permission:customers', ['only' => ['index']]);
        $this->middleware('permission:Add_Client', ['only' => ['create', 'store']]);
        $this->middleware('permission:Edite_C', ['only' => ['edit', 'update']]);
        $this->middleware('permission:Delete_C', ['only' => ['destroy']]);
    }




    public function index()
    {
        $Clients = Client::all();
        return  view('Client.index', compact('Clients'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Categorie::all();
        return view('Client.Add_Client', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $Client = new Client();
        $Client->Name = $request->Name;
        $Client->National_ID = $request->National_ID;
        $Client->Status = $request->Status;
        $Client->categorie_id = $request->categorie_id;

        $Client->save();
        return redirect()->route('Client.index')
            ->with('success', 'Client created successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */


    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $Client = Client::find($id);
        $categories = Categorie::all();
        return view('Client.edit', compact('categories', 'Client'));
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



        $Cliente = Client::find($request->id);

        $Cliente->Name = $request->Name;
        $Cliente->National_ID = $request->National_ID;
        $Cliente->Status = $request->Status;
        $Cliente->categorie_id = $request->categorie_id;

        $Cliente->save();

        return redirect()->route('Client.index')
            ->with('update', 'Client update successfully');;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        Client::find($request->id)->delete();

        return redirect()->route('Client.index')
            ->with('delete', 'Client delete successfully');
    }

    ////////// client ceck   /////
    public function show($id)
    {
        $Abdominal_Circumference = Abdominal_Circumference::where('Client_id', $id)->get();
        $Fat_Percentage = Fat_Percentage::where('Client_number', $id)->get();
        $Height = Height::where('Client__Id', $id)->get();
        $Weight = Weight::where('id_Client', $id)->get();
        //  return view('Client.ceckclient.Ceck_Abdominal_Circumference', compact('Abdominal_Circumference', 'Height', 'Weight', 'Fat_Percentage'));

        return view('Client.Ceck_Index', compact('Abdominal_Circumference', 'Height', 'Weight', 'Fat_Percentage'));
    }

    public function export()
    {

        return Excel::download(new ClientExport, 'Client.xlsx');
    }
}
