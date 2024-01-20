<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FacturaProveedor extends Model
{
    use HasFactory;

    protected $table = 'facturas_proveedores';

    protected $fillable = [
        'proveedor_id',
        'numero_factura',
        'fecha_factura',
        'monto_total',
        'saldo_pendiente',
        'metodo_pago',
        'active'
    ];

    public function proveedor()
    {
        return $this->belongsTo(Proveedor::class, 'proveedor_id');
    }

    public function detalles()
    {
        return $this->hasMany(FacturaProveedorDetalle::class, 'factura_proveedor_id');
    }
}
