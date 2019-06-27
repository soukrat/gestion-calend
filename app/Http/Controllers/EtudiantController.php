<?php

namespace App\Http\Controllers;

use App\User;
use App\Etudiant;
use Illuminate\Http\Request;

class EtudiantController extends Controller
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
        $etudiants = Etudiant::all();

        return view('admin.etudiants.etudiants', ['etudiants' => $etudiants]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.etudiants.addEtudiant');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $etudiant = new Etudiant();
        $etudiant->nom = $request->input('nom');
        $etudiant->prenom = $request->input('prename');
        $etudiant->email = $request->input('email');
        $etudiant->save();

        /*$user = new User();
        $user->name = $request->input('nom');
        $user->email = $request->input('email');
        $user->password = bcrypt($request->input('password'));
        $user->type_user = "etudiant";
        $user->save();*/

        return redirect('admin/etudiants')->with('status', 'etudiant ajouter successful !');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Etudiant  $etudiant
     * @return \Illuminate\Http\Response
     */
    public function show(Etudiant $etudiant)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Etudiant  $etudiant
     * @return \Illuminate\Http\Response
     */
    public function edit(Etudiant $etudiant)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Etudiant  $etudiant
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $etudiant = Etudiant::find($id);

        $etudiant->nom = $request->input('name');
        $etudiant->prenom = $request->input('prename');
        $etudiant->email = $request->input('email');
        $etudiant->password = bcrypt($request->input('password'));

        $etudiant->save();
        return redirect('admin/etudiants')->with('status', 'etudiant ajouter successful !');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Etudiant  $etudiant
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $etudiant = Etudiant::find($id);

        $etudiant->delete();

        return redirect('admin/etudiants')->with('status', 'etudiant delete successful !');
    }
}
