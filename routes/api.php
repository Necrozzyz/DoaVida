<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\PerfilController;
use App\Http\Controllers\EnderecoController;
use App\Http\Controllers\HospitalController;
use App\Http\Controllers\OrgaoController;
use App\Http\Controllers\RelacaoController;

// **Rotas de Autenticação**
Route::prefix('auth')->group(function () {
    Route::post('login', [AuthController::class, 'login']); // Rota para login
    Route::post('register', [AuthController::class, 'register']); // Rota para registrar um novo usuário
    Route::post('logout', [AuthController::class, 'logout']); // Rota para logout
});

// **Rotas para Usuários**
Route::prefix('usuarios')->group(function () {
    Route::get('/', [UserController::class, 'index']); // Listar todos os usuários
    Route::post('/', [UserController::class, 'store']); // Criar novo usuário
    Route::get('/{id}', [UserController::class, 'show']); // Obter detalhes de um usuário
    Route::put('/{id}', [UserController::class, 'update']); // Atualizar usuário
    Route::delete('/{id}', [UserController::class, 'destroy']); // Deletar usuário
});

// **Rotas para Perfis**
Route::prefix('perfils')->group(function () {
    Route::get('/', [PerfilController::class, 'index']); // Listar todos os perfis
    Route::post('/', [PerfilController::class, 'store']); // Criar um novo perfil
    Route::get('/{id}', [PerfilController::class, 'show']); // Obter detalhes de um perfil específico
    Route::put('/{id}', [PerfilController::class, 'update']); // Atualizar um perfil
    Route::delete('/{id}', [PerfilController::class, 'destroy']); // Deletar um perfil
});

// **Rotas para Endereços**
Route::prefix('enderecos')->group(function () {
    Route::get('/', [EnderecoController::class, 'index']); // Listar todos os endereços
    Route::post('/', [EnderecoController::class, 'store']); // Criar novo endereço
    Route::get('/{id}', [EnderecoController::class, 'show']); // Obter detalhes de um endereço
    Route::put('/{id}', [EnderecoController::class, 'update']); // Atualizar endereço
    Route::delete('/{id}', [EnderecoController::class, 'destroy']); // Deletar endereço
});

// **Rotas para Hospitais**
Route::prefix('hospitais')->group(function () {
    Route::get('/', [HospitalController::class, 'index']); // Listar todos os hospitais
    Route::post('/', [HospitalController::class, 'store']); // Criar novo hospital
    Route::get('/{id}', [HospitalController::class, 'show']); // Obter detalhes de um hospital
    Route::put('/{id}', [HospitalController::class, 'update']); // Atualizar hospital
    Route::delete('/{id}', [HospitalController::class, 'destroy']); // Deletar hospital
});

// **Rotas para Órgãos**
Route::prefix('orgaos')->group(function () {
    Route::get('/', [OrgaoController::class, 'index']); // Listar todos os órgãos
    Route::post('/', [OrgaoController::class, 'store']); // Criar novo órgão
    Route::get('/{id}', [OrgaoController::class, 'show']); // Obter detalhes de um órgão
    Route::put('/{id}', [OrgaoController::class, 'update']); // Atualizar órgão
    Route::delete('/{id}', [OrgaoController::class, 'destroy']); // Deletar órgão
});

// **Rotas para Relações (Usuários-Órgãos)**
Route::prefix('relacoes')->group(function () {
    Route::get('/', [RelacaoController::class, 'index']); // Listar todas as relações
    Route::post('/', [RelacaoController::class, 'store']); // Criar nova relação
    Route::get('/{id}', [RelacaoController::class, 'show']); // Obter detalhes de uma relação
    Route::put('/{id}', [RelacaoController::class, 'update']); // Atualizar uma relação
    Route::delete('/{id}', [RelacaoController::class, 'destroy']); // Deletar uma relação
});
