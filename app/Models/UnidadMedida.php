<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UnidadMedida extends Model
{
    use HasFactory;

    protected $table = 'unidades_medida';

    protected $fillable = ['nombre', 'descripcion', 'active'];

    public function productos()
    {
        return $this->hasMany(Producto::class, 'unidad_medida_id');
    }
}
