<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AthController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\PerfilController;
use App\Http\Controllers\EnderecoController;
use App\Http\Controllers\HospitalController;
use App\Http\Controllers\OrgaoController;
use App\Http\Controllers\RelacaoController;

Route::prefix('auth')->group(function () {
    Route::post('/auth/login', [AthController::class, 'login']); // Rota para login
    Route::post('/auth/register', [AthController::class, 'register']); // Rota para registrar um novo usuário
    Route::post('logout', [AthController::class, 'logout']); // Rota para logout
});

Route::prefix('users')->group(function () {
    Route::get('/user', [UserController::class, 'index']); // Listar todos os usuários
    Route::post('/', [UserController::class, 'store']); // Criar novo usuário
    Route::get('/user/{id}', [UserController::class, 'show']); // Obter detalhes de um usuário
});

Route::prefix('perfils')->group(function () {
    Route::get('/perfil', [PerfilController::class, 'index']); // Listar todos os perfis
    Route::post('/', [PerfilController::class, 'store']); // Criar um novo perfil
});

Route::prefix('enderecos')->group(function () {
    Route::get('/endereco', [EnderecoController::class, 'index']); // Listar todos os endereços
    Route::post('/', [EnderecoController::class, 'store']); // Criar novo endereço
    Route::put('/endereco/{id}/update', [EnderecoController::class, 'update']); // Atualizar endereço
    Route::delete('/endereco/{id}/delete', [EnderecoController::class, 'destroy']); // Deletar endereço
});

Route::prefix('hospitais')->group(function () {
    Route::get('/hospital/list', [HospitalController::class, 'index']); // Listar todos os hospitais
    Route::post('/hospital/new', [HospitalController::class, 'store']); // Criar novo hospital
});

Route::prefix('orgaos')->group(function () {
    Route::get('/', [OrgaoController::class, 'index']); // Listar todos os órgãos
    Route::post('/', [OrgaoController::class, 'store']); // Criar novo órgão
});

Route::prefix('relacoes')->group(function () {
    Route::post('/', [RelacaoController::class, 'store']); // Criar nova relação
    Route::get('/{id}', [RelacaoController::class, 'show']); // Obter detalhes de uma relação
});
