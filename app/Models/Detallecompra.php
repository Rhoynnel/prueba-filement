<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Detallecompra extends Model
{
    protected $table = 'detallecompra';

    protected $fillable = [
        'compras_id',
        'productos_id',
        'cantidad',
    ];

    public function compra()
    {
        return $this->belongsTo(Compra::class, 'compras_id');
    }

    public function producto()
    {
        return $this->belongsTo(Producto::class, 'productos_id');
    }
}
