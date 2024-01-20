<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Usuario extends Model
{
    use HasFactory;

    protected $table = 'usuarios';

    protected $fillable = [
        'username',
        'password',
        'email',
        'rol_id',
        'active'
    ];

    public function rol()
    {
        return $this->belongsTo(Rol::class, 'rol_id');
    }

    public function sesiones()
    {
        return $this->hasMany(Sesion::class, 'usuario_id');
    }

    public function intentosLogin()
    {
        return $this->hasMany(IntentoLogin::class, 'usuario_id');
    }
}
