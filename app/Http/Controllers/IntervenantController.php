<?php

namespace App\Http\Controllers;

use App\Intervenant;
use Illuminate\Http\Request;

class IntervenantController extends Controller
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
        $intervenants = Intervenant::all();

        return view('admin.intervenants.intervenants', ['intervenants' => $intervenants]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.intervenants.addIntervenant');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $intervenant = new Intervenant();
        $intervenant->nom = $request->input('nom');
        $intervenant->prenom = $request->input('prenom');
        $intervenant->email = $request->input('email');
        $intervenant->save();

        /*$user = new User();
        $user->name = $request->input('nom');
        $user->email = $request->input('email');
        $user->password = bcrypt($request->input('password'));
        $user->type_user = "etudiant";
        $user->save();*/

        return redirect('admin/intervenants')->with('status', 'intervenant ajouter successful !');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Intervenant  $intervenant
     * @return \Illuminate\Http\Response
     */
    public function show(Intervenant $intervenant)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Intervenant  $intervenant
     * @return \Illuminate\Http\Response
     */
    public function edit(Intervenant $intervenant)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Intervenant  $intervenant
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $intervenant = Intervenant::find($id);

        $intervenant->nom = $request->input('nom');
        $intervenant->prenom = $request->input('prenom');
        $intervenant->email = $request->input('email');

        $intervenant->save();
        return redirect('admin/intervenants')->with('status', 'intervenant ajouter successful !');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Intervenant  $intervenant
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $intervenant = Intervenant::find($id);

        $intervenant->delete();

        return redirect('admin/intervenants')->with('status', 'intervenant delete successful !');
    }
}
