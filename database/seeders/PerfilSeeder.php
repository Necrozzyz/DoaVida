<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Perfil;

class PerfilSeeder extends Seeder
{
    public function run()
    {
        $perfis = [
            ['descricao' => 'Administrador'],
            ['descricao' => 'Doador'],
            ['descricao' => 'Receptor'],
        ];

        foreach ($perfis as $perfil) {
            Perfil::create($perfil);
        }
    }
}
