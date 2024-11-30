<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Hospital extends Model
{
    protected $fillable = ['nome', 'endereco'];

    public function usuarios()
    {
        return $this->belongsToMany(User::class, 'hospital_usuario');
    }
}

