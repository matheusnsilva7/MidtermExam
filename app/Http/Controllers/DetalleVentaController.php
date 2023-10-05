<?php

namespace App\Http\Controllers;

use App\Models\DetalleVenta;
use Illuminate\Http\Request;

class DetalleVentaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return DetalleVenta::all();
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

        $detalleVenta = DetalleVenta::create($data);

        return $detalleVenta;
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $detalleVenta = DetalleVenta::where('iddetalle_venta', $id)->firstOrFail();
        return $detalleVenta;
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
        $detalleVenta = DetalleVenta::where('iddetalle_venta', $id);

        $data = $request->all();

        $detalleVenta->update($data);

        return response()->json(['message' => 'Trabajador updated successfully']);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $detalleVenta = DetalleVenta::where('iddetalle_venta', $id);
        $detalleVenta->delete();

        return response()->json([], 204);
    }
}
