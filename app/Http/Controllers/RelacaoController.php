<?php

namespace App\Http\Controllers;

use App\Models\Relacao;
use App\Models\Orgao;
use Illuminate\Http\Request;

class RelacaoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    // Criar uma nova relação (doador ou receptor)
    public function store(Request $request)
    {
        $validated = $request->validate([
            'usuario_id' => 'required|exists:users,id',
            'orgao_id' => 'required|exists:orgaos,id',
            'tipo' => 'required|in:Doador,Receptor',
        ]);

        $relacao = Relacao::create($validated);
        return response()->json($relacao, 201);
    }

    // Listar as relações de um usuário
    public function show($usuarioId)
    {
        $relacoes = Relacao::where('usuario_id', $usuarioId)->with('orgao')->get();
        return response()->json($relacoes);
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
