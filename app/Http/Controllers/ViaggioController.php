<?php

namespace App\Http\Controllers;

use App\Viaggio;
use Illuminate\Http\Request;

class ViaggioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $viaggi = Viaggio::all();
        return view('index', compact('viaggi'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $viaggio = new Viaggio();
        $viaggio->destinazione = $request->destinazione;
        $viaggio->img = $request->img;
        $viaggio->hotel = $request->hotel;
        $viaggio->valutazione = $request->valutazione;
        $viaggio->prezzo = $request->prezzo;
        $viaggio->descrizione = $request->descrizione;
        $viaggio->save();

        return redirect('create');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Viaggio  $viaggio
     * @return \Illuminate\Http\Response
     */
    public function show(Viaggio $viaggio)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Viaggio  $viaggio
     * @return \Illuminate\Http\Response
     */
    public function edit(Viaggio $viaggio)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Viaggio  $viaggio
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Viaggio $viaggio)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Viaggio  $viaggio
     * @return \Illuminate\Http\Response
     */
    public function destroy(Viaggio $viaggio)
    {
        //
    }
}
