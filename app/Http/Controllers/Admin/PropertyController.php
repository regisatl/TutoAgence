<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\PropertyFormRequest;
use App\Models\Option;
use App\Models\Property;
use Illuminate\Http\Request;

class PropertyController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        return view('admin.properties.index', [
            'properties' => Property::orderBy('created_at', 'desc')->paginate(10)
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $property = new Property();
        $property->fill([
            'title' => 'Maison ATTOLOU',
            'surface' => 40,
            'price' => 50000,
            'rooms' => 5,
            'bedrooms' => 3,
            'floor' => 0,
            'address' => 'Tokan/M/ATTOLOU',
            'city' => 'Abomey-Calavi',
            'postal_code' => 'MA 3400',
            'sold' => false,
        ]);
        return view('admin.properties.form', [
            'property' => new Property(),
            'options' => Option::pluck('name', 'id')
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(PropertyFormRequest $request)
    {
        $property = Property::create($request->validated());
        $property->options()->sync($request->validated('options'));
        return redirect()->route('admin.property.index')->with('success', 'Le bien a été crée avec succès.');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $property = Property::find($id);
        return view('admin.properties.form', [
            'property' => $property,
            'options' => Option::pluck('name', 'id')
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(PropertyFormRequest $request, string $id)
    {
        $property = Property::find($id);
        $property->options()->sync($request->validated('options'));
        $property->update($request->validated());
        return redirect()->route('admin.property.index')->with('success', 'Le bien a été modifiée avec succès.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $property = Property::find($id);
        $property->delete();
        return redirect()->route('admin.property.index')->with('success', 'Le bien a été supprimée avec succès.');
    }
}
