<?php

namespace App\Http\Controllers;

use App\Models\Endereco;
use Illuminate\Http\Request;

class EnderecoController extends Controller
{
    // Listar endereços
    public function index()
    {
        $enderecos = Endereco::all();
        return response()->json($enderecos);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    // Criar um novo endereço
    public function store(Request $request)
    {
        $validated = $request->validate([
            'logradouro' => 'required|string|max:255',
            'bairro' => 'required|string|max:255',
            'cidade' => 'required|string|max:255',
            'cep' => 'required|string|max:10',
        ]);

        $endereco = Endereco::create($validated);
        return response()->json($endereco, 201);
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

    // Atualizar um endereço
    public function update(Request $request, $id)
    {
        $endereco = Endereco::findOrFail($id);
        $endereco->update($request->all());
        return response()->json($endereco);
    }

    // Deletar um endereço
    public function destroy($id)
    {
        $endereco = Endereco::findOrFail($id);
        $endereco->delete();
        return response()->json(['message' => 'Endereço excluído com sucesso']);
    }
}
