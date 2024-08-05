<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreMejaRequest;
use App\Http\Requests\UpdateMejaRequest;
use App\Models\Meja;
use Illuminate\Http\Request;

class MejaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $mejas = Meja::latest()->paginate(10);

        return view('admin.meja.index', compact('mejas'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreMejaRequest $request)
    {
        Meja::create($request->validated());

        return redirect()->route('mejas.index')->with('success', 'Meja created successfully');
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateMejaRequest $request, Meja $meja)
    {
        $meja->update($request->validated());

        return redirect()->route('mejas.index')->with('success', 'Meja updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Meja $meja)
    {
        $meja->delete();

        return redirect()->route('mejas.index')->with('success', 'Meja deleted successfully');
    }
}
