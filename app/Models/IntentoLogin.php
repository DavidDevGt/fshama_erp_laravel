<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class IntentoLogin extends Model
{
    use HasFactory;

    protected $table = 'intentos_login';

    protected $fillable = [
        'usuario_id',
        'ip_address',
        'fecha_intentos'
    ];

    public function usuario()
    {
        return $this->belongsTo(Usuario::class, 'usuario_id');
    }
}
