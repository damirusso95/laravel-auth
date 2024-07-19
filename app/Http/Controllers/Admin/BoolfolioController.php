<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Boolfolio;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

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
        $categories = Category::all();
        return view('admin.boolfolios.create', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $data = $request->all();

        $newProject = new Boolfolio();
        $newProject->autore = $data['autore'];
        $newProject->nome = $data['nome'];
        $newProject->cover_image = $data['cover_image'];
        $newProject->descrizione = $data['descrizione'];
        $newProject->inizio = $data['inizio'];
        $newProject->fine = $data['fine'];
        $newProject->category_id = $data['category_id'];     
        $newProject-> save();


        return redirect()->route('admin.boolfolios.show', $newProject->id);
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
            'fine' => 'required|date',
            'category_id' => 'nullable|exists:categories,id',
            'cover_image' => 'nullable|image',
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
