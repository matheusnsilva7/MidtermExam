<?php

namespace App\Http\Controllers;

use App\Models\Cliente;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Http\Request;

class ClienteController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return Cliente::all();
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

        $cliente = Cliente::create($data);

        return $cliente;
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $cliente = Cliente::where('idcliente', $id)->firstOrFail();
        return $cliente;
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
        try {
            $cliente = Cliente::where('idcliente', $id);

            $data = $request->all();

            $cliente->update($data);

            return response()->json(['message' => 'Trabajador updated successfully']);
        } catch (ModelNotFoundException $e) {
            return response()->json(['message' => 'Cliente not found'], 404);
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $cliente = Cliente::where('idcliente', $id);
        $cliente->delete();

        return response()->json([], 204);
    }
}
