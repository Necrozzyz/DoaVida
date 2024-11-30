<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Relacao extends Model
{
    protected $fillable = ['usuario_id', 'orgao_id', 'tipo'];

    public function usuario()
    {
        return $this->belongsTo(User::class);
    }

    public function orgao()
    {
        return $this->belongsTo(Orgao::class);
    }
}

