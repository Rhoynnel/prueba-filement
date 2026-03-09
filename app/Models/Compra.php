<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Compra extends Model
{
    protected $table = 'compras';

    protected $fillable = [
        'proveedors_id',
        'numero_factura',
        'fecha',
        'estado',
    ];

    public function proveedors()
    {
        return $this->belongsTo(Proveedor::class, 'proveedors_id');
    }

    public function detallecompras()
    {
        return $this->hasMany(Detallecompra::class, 'compras_id');
    }

}
    