<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Boolfolio;
use Illuminate\Http\Request;

class BoolfolioController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $boolfolios = Boolfolio::all();
        return view('admin.boolfolios.index', compact('boolfolios'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.boolfolios.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'autore' => 'required',
            'nome' => 'required',
            'cover_image' => 'nullable',
            'descrizione' => 'nullable',
            'inizio' => 'required|date',
            'fine' => 'required|date',
            
        ]);

        $newBoolfolio = Boolfolio::create($request->all());

        return redirect()->route('admin.boolfolios.show', $newBoolfolio->id)
            ->with('success', 'Boolfolio creato con successo.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $boolfolio = Boolfolio::find($id);

        return view('admin.boolfolios.show', compact('boolfolio'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Boolfolio $boolfolio)
    {
        return view('admin.boolfolios.edit', compact('boolfolio'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Boolfolio $boolfolio)
    {
        $request->validate([
            'autore' => 'required',
            'nome' => 'required',
            'descrizione' => 'nullable',
            'inizio' => 'required|date',
            'fine' => 'required|date'
        ]);

        $boolfolio->update($request->all());

        return redirect()->route('admin.boolfolios.index')
            ->with('success', 'Boolfolio aggiornato con successo.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Boolfolio $boolfolio)
    {
        $boolfolio->delete();

        return redirect()->route('admin.boolfolios.index')
            ->with('success', 'Boolfolio eliminato con successo.');
    }
}
