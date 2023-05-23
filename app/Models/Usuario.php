<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class Usuario extends Authenticatable
{
    use HasFactory, Notifiable;

    protected $table = 'tb_cad_usuario';

    protected $hidden = ['senha'];

    protected $fillable = ['usuario', 'senha'];

    public function getAuthPassword()
    {
        return $this->senha;
    }
}
