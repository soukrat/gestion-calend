<?php

namespace App\Http\Controllers;

use App\Filiere;
use App\Classe;
use Illuminate\Http\Request;

class FiliereController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $filieres = Filiere::all();

        return view('admin.filieres.filieres', ['filieres' => $filieres]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $classes = Classe::all();
        
        return view('admin.filieres.addFiliere', ['classes' => $classes]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $filiere = new Filiere();

        $filiere->classes_id = $request->input('classe');
        $filiere->libelle = $request->input('libelle');

        $filiere->save();
        return redirect('admin/filieres')->with('status', 'filiere ajouter successful !');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Filiere  $filiere
     * @return \Illuminate\Http\Response
     */
    public function show(Filiere $filiere)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Filiere  $filiere
     * @return \Illuminate\Http\Response
     */
    public function edit(Filiere $filiere)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Filiere  $filiere
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $filiere = Filiere::find($id);

        $filiere->libelle = $request->input('libelle');

        $filiere->save();
        return redirect('admin/filieres')->with('status', 'filiere update successful !');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Filiere  $filiere
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $filiere = Filiere::find($id);

        $filiere->delete();

        return redirect('admin/filieres')->with('status', 'filiere delete successful !');
    }
}
