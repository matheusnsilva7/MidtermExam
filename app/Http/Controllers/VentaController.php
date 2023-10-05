<?php

namespace App\Http\Controllers;

use App\Models\Venta;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Http\Request;

class VentaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return Venta::all();
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->all();

        $venta = Venta::create($data);

        return $venta;
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $venta = Venta::where('idventa', $id)->firstOrFail();
        return $venta;
    }


    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $venta = Venta::where('idventa', $id);

        $data = $request->all();

        $venta->update($data);

        return response()->json(['message' => 'Trabajador updated successfully']);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        try {
            $venta = Venta::where('idventa', $id);
            $venta->delete();

            return response()->json([], 204);
        } catch (ModelNotFoundException $e) {
            return response()->json(['message' => 'Venta not found'], 404);
        }
    }
}
