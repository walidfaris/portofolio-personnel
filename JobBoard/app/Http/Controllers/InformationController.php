<?php

namespace App\Http\Controllers;

use App\Models\Information;
use Illuminate\Http\Request;


class InformationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Information::all();
        $data = Information::latest()->paginate(5);

        return view('pages.index', compact('data'))->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

    public function store(Request $request)
    {
        $request->validate([
            'nom'      =>  'required',
            'prenom'     =>  'required',
            'email'     =>  'required',
            'numero'     =>  'required',
            'message'     =>  'required',
            
            'cv'         =>  'required'
        ]);

        $file_name = time() . '.' . request()->cv->getClientOriginalExtension();

        request()->cv->move(public_path('cv'), $file_name);

        $informations = new Information;

        $informations->nom = $request->nom;
        $informations->prenom = $request->prenom;
        $informations->email = $request->email;
        $informations->numero= $request->numero;
        $informations->message = $request->message;
        $informations->cv = $file_name;

        $informations->save();

        return redirect()->route('offres')->with('success', 'informations Added successfully.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Information  $informations
     * @return \Illuminate\Http\Response
     */
    public function destroy(Information $information)
    {
        $information->delete();

        return redirect()->route('informations.index')->with('success', 'informations Data deleted successfully');
    }
}