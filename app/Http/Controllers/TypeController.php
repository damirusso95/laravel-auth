<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Type;
use Illuminate\Http\Request;

class TypeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $types = Type::all();

        $data = [
            "types" => $types
        ];

        return view("admin.types.index", $data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("admin.types.create");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nome' => 'required',
            'descrizione' => 'nullable',
            'icona' => 'nullable'
        ]);

        Type::create($request->all());
        return redirect()->route('admin.types.index')->with('success', 'Type created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Type $type)
    {
        $data = [
            "type" => $type
        ];

        return view("admin.types.show", $data);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Type $type)
    {
        $data = [
            "type" => $type
        ];

        return view("admin.types.edit", $data);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Type $type)
    {
        $request->validate([
            'nome' => 'required',
            'descrizione' => 'nullable',
            'icona' => 'nullable'
        ]);

        $type->update($request->all());
        return redirect()->route('admin.types.index')->with('success', 'Type updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Type $type)
    {
        $type->delete();
        return redirect()->route('admin.types.index')->with('success', 'Type deleted successfully.');
    }
}
