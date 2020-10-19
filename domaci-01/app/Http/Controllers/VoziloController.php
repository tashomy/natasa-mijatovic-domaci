<?php

namespace App\Http\Controllers;

use App\Models\Vozilo;
use Illuminate\Http\Request;

class VoziloController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $vozila = Vozilo::orderBy('created_at', 'DESC')->get();
       return view('prikazi.pregled', ['vozila' => $vozila]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('prikazi.dodavanje');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'proizvodjac' => 'required',
            'model' => 'required',
            'godina_proizvodnje' => 'required|max:'.date("Y"),
            'registarske_oznake' => 'nullable|max:7',
            'broj_vrata' => 'required|gt:1|lt:5',
            'boja' => 'required',
            'tip_goriva' =>'required',
            'zapremina_motora' => 'nullable',
            'snaga_motora' => 'nullable'
        ]);
        Vozilo::create($validated);
        return redirect('/vozilo');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Vozilo  $vozilo
     * @return \Illuminate\Http\Response
     */
    public function show(Vozilo $vozilo)
    {
        return view('prikazi.prikazi', ['vozilo' => $vozilo]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Vozilo  $vozilo
     * @return \Illuminate\Http\Response
     */
    public function edit(Vozilo $vozilo)
    {
       return view('prikazi.update', ['vozilo' => $vozilo]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Vozilo  $vozilo
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Vozilo $vozilo)
    {
        $validated = $request->validate([
            'proizvodjac' => 'string|required',
            'model' => 'string|required',
            'godina_proizvodnje' => 'integer|required|digits:4|max:'.(date('Y')+1),
            'registarske_oznake' => 'string|nullable|max:7',
            'broj_vrata' => 'integer|required|gt:1|lt:5',
            'boja' => 'string|required',
            'tip_goriva' =>'string|required',
            'zapremina_motora' => 'numeric|nullable',
            'snaga_motora' => 'numeric|nullable'
        ]);
        //Vozilo::create($validated);

        $vozilo->update($validated);

        return redirect('/vozilo');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Vozilo  $vozilo
     * @return \Illuminate\Http\Response
     */
    public function destroy(Vozilo $vozilo)
    {
        $vozilo->delete();
        return redirect('/vozilo');
    }
}
