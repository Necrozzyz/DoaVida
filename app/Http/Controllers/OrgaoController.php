<?php

namespace App\Http\Controllers;

use App\Models\Orgao;
use Illuminate\Http\Request;

class OrgaoController extends Controller
{
    // Listar todos os órgãos
    public function index()
    {
        $orgaos = Orgao::all();
        return response()->json($orgaos);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    // Criar um novo órgão
    public function store(Request $request)
    {
        $validated = $request->validate([
            'nome' => 'required|string|max:255',
            'tipo' => 'required|string|max:255',
            'status' => 'required|in:disponivel,indisponivel',
        ]);
        
        $orgao = Orgao::create($validated);
        return response()->json($orgao, 201);
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
