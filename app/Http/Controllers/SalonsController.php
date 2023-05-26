<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Salons;
use App\Http\Controllers\SalonsController;

class SalonsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $salons = Salons::all();
        return view('index', compact('salons'));

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $salon = new Salon();
        $salon->nombre = $request->input('nombre');
        $salon->ubicacion = $request->input('ubicacion');
        $salon->imagenes = $request->input('imagenes');
        $salon->save();
        return redirect()->route('salons.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $salon = Salon::findOrFail($id);
        return view('edit', compact('salon'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $salon = Salon::findOrFail($id);
        $salon->nombre = $request->input('nombre');
        $salon->ubicacion = $request->input('ubicacion');
        $salon->imagenes = $request->input('imagenes');
        $producto->save();
        return redirect()->route('salons.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $salon = Salon::findOrFail($id);
        $salon->delete();
        return redirect()->route('salons.index');
    }
}
