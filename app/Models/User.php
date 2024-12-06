<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\PassportHasApiTokens;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    /** @use HasFactory<\Database\Factories\UserFactory> */
    use HasApiTokens, HasFactory, Notifiable;

     // Verifica se o usuário tem um papel específico
     public function hasRole(string $role): bool
     {
         return $this->role === $role;
     }
 
     // Verifica se o usuário é administrador
     public function isAdmin(): bool
     {
         return $this->role === UserRole::ADMIN->value;
     }
 
     // Verifica se o usuário é coordenador
     public function isCoordinator(): bool
     {
         return $this->role === UserRole::COORDINATOR->value;
     }

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'password' => 'hashed',
        ];
    }

    public function perfil()
    {
    return $this->belongsTo(Perfil::class);
    }

    public function endereco()
    {
    return $this->belongsTo(Endereco::class);
    }
}
