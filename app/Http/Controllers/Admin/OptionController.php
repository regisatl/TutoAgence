<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\OptionFormRequest;
use App\Models\Option;
use Illuminate\Http\Request;

class OptionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('admin.options.index', [
            'options' => Option::orderBy('created_at', 'desc')->paginate(10)
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $option = new Option();
        return view('admin.options.form', [
            'option' => $option
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(OptionFormRequest $request)
    {
        $option = Option::create($request->validated());
        return redirect()->route('admin.option.index')->with('success', 'L\'option a été crée avec succès.');
    }
    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $option = Option::findOrFail($id);
        return view('admin.options.form', [
            'option' => $option
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(OptionFormRequest $request, string $id)
    {
        $option = Option::findOrFail($id);
        $option->update($request->validated());
        return redirect()->route('admin.option.index')->with('success', 'L\'option a été modifiée avec succès.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $option = Option::find($id);
        $option->delete();
        return redirect()->route('admin.option.index')->with('success', 'L\'option a été supprimée avec succès.');
    }
}
