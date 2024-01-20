<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Proveedor extends Model
{
    use HasFactory;

    protected $table = 'proveedores';

    protected $fillable = ['nombre', 'direccion', 'telefono', 'email', 'nit', 'dias_credito', 'nombre_vendedor', 'active'];

    public function productos()
    {
        return $this->hasMany(Producto::class, 'proveedor_id');
    }

    public function facturasProveedor()
    {
        return $this->hasMany(FacturaProveedor::class, 'proveedor_id');
    }
}
