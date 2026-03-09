<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Despacho extends Model
{
    protected $table = 'despachos';

    protected $fillable = [
        'clientes_id',
        'tasas_id',
        'estado',
    ];

    public function compra()
    {
        return $this->belongsTo(Compra::class, 'compras_id');
    }

    public function cliente()
    {
        return $this->belongsTo(Cliente::class, 'clientes_id');
    }

    public function tasa()
    {
        return $this->belongsTo(Tasa::class, 'tasas_id');
    }

    public function detalledespachos()
    {
        return $this->hasMany(Detalledespacho::class, 'despachos_id');
    }
}
