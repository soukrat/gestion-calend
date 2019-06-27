<?php

namespace App\Http\Controllers;

use App\Salle;
use Illuminate\Http\Request;

class SalleController extends Controller
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
        $salles = Salle::all();

        return view('admin.salles.salles', ['salles' => $salles]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.salles.addSalle');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $salle = new Salle();

        $salle->libelle = $request->input('libelle');

        $salle->save();
        return redirect('admin/salles')->with('status', 'salle ajouter successful !');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Salle  $salle
     * @return \Illuminate\Http\Response
     */
    public function show(Salle $salle)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Salle  $salle
     * @return \Illuminate\Http\Response
     */
    public function edit(Salle $salle)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Salle  $salle
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $salle = Salle::find($id);

        $salle->libelle = $request->input('libelle');

        $salle->save();
        return redirect('admin/salles')->with('status', 'salle ajouter successful !');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Salle  $salle
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $salle = Salle::find($id);

        $salle->delete();

        return redirect('admin/salles')->with('status', 'salle delete successful !');
    }
}
