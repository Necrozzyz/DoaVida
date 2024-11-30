<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Perfil extends Model
{
    protected $fillable = ['descricao'];

    public function users()
    {
        return $this->hasMany(User::class, 'perfil_id');
    }
}

