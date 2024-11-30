<?php

namespace App\Http\Controllers;

use App\Models\Perfil;
use App\Models\User;
use Illuminate\Http\Request;

class PerfilController extends Controller
{
    // Listar todos os perfis
    public function index()
    {
        $perfis = Perfil::all();
        return response()->json($perfis);
    }

    // Atribuir um perfil a um usuário
    public function assign(Request $request)
    {
        $validated = $request->validate([
            'usuario_id' => 'required|exists:users,id',
            'perfil_id' => 'required|exists:perfils,id',
        ]);

        $usuario = User::findOrFail($validated['usuario_id']);
        $usuario->perfil_id = $validated['perfil_id'];
        $usuario->save();

        return response()->json(['message' => 'Perfil atribuído com sucesso']);
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
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
