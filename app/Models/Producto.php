<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    protected $fillable = [
        'codigo',
        'barras',
        'nombre',
        'categoria_id',
        'precio_compra',
        'precio_venta',
        'stock_actual',
    ];

    public function categoria()
    {
        return $this->belongsTo(Categoria::class);
    }
}
