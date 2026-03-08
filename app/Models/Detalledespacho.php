<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Detalledespacho extends Model
{
    protected $table = 'detalledespacho';

    protected $fillable = [
        'despachos_id',
        'productos_id',
        'cantidad',
        'precio_dolar',
        'precio_bs',
    ];

    public function despacho()
    {
        return $this->belongsTo(Despacho::class, 'despachos_id');
}

    public function producto()
    {
        return $this->belongsTo(Producto::class, 'productos_id');
    }
}
