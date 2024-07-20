<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Boolfolio;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;



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
        // Validazione dei dati
    $data = $request->validate([
        'autore' => 'required|string|max:255',
        'nome' => 'required|string|max:255',
        'cover_image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        'descrizione' => 'nullable|string',
        'inizio' => 'required|date',
        'fine' => 'required|date',
        'category_id' => 'nullable|exists:categories,id'
    ]);

        // $data = $request->all();
        // $newProject = new Boolfolio();
        // $newProject->autore = $data['autore'];
        // $newProject->nome = $data['nome'];
        // $newProject->cover_image = $data['cover_image'];
        // $newProject->descrizione = $data['descrizione'];
        // $newProject->inizio = $data['inizio'];
        // $newProject->fine = $data['fine'];
        // $newProject->category_id = $data['category_id'];     
        // $newProject-> save();

        
        if($request->has('cover_image')){
            // salva immagine
            $image_path = storage::put('uploads', $request->cover_image);
            $data['cover_image'] = $image_path;
        }
       
            // Creazione del nuovo progetto
            $newProject = Boolfolio::create($data);


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
        $categories = Category::all();
        return view('admin.boolfolios.edit', compact('boolfolio','categories'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Boolfolio $boolfolio)
    {
        $data = $request->validate([
            'autore' => 'required|string|max:255',
            'nome' => 'required|string|max:255',
            'cover_image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'descrizione' => 'nullable|string',
            'inizio' => 'required|date',
            'fine' => 'required|date',
            'category_id' => 'nullable|exists:categories,id'
        ]);

        if($request->has('cover_image')){
            // salva immagine
            $image_path = storage::put('uploads', $request->cover_image);
            $data['cover_image'] = $image_path;

        if($boolfolio->cover_image && !Str::start($boolfolio->cover_image, 'http')){

            Storage::delete($boolfolio->cover_image);
        }
        }
    
        $boolfolio->update($data);

        return redirect()->route('admin.boolfolios.index')
            ->with('success', 'Boolfolio aggiornato con successo.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Boolfolio $boolfolio)
    {
         // Elimina l'immagine associata se esiste
    if ($boolfolio->cover_image) {
        Storage::disk('public')->delete($boolfolio->cover_image);
    }

    // Elimina il progetto
    $boolfolio->delete();

        return redirect()->route('admin.boolfolios.index')
            ->with('success', 'Boolfolio eliminato con successo.');
    }
}
