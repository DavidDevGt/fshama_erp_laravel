<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FacturaProveedorDetalle extends Model
{
    use HasFactory;

    protected $table = 'facturas_proveedor_d';

    protected $fillable = [
        'factura_proveedor_id',
        'producto_id',
        'cantidad',
        'precio_compra',
        'marca_id',
        'active'
    ];

    public function facturaProveedor()
    {
        return $this->belongsTo(FacturaProveedor::class, 'factura_proveedor_id');
    }

    public function producto()
    {
        return $this->belongsTo(Producto::class, 'producto_id');
    }

    public function marca()
    {
        return $this->belongsTo(Marca::class, 'marca_id');
    }
}
