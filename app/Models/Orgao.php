<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Orgao extends Model
{
    protected $fillable = ['nome', 'tipo', 'status'];

    public function relacoes()
    {
        return $this->hasMany(Relacao::class);
    }
}
