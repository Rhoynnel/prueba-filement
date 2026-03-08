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

    // Accessor for Filament and other code to treat as an attribute
    public function getNumeroDespachoAttribute(): string
    {
        return 'D-' . str_pad($this->id, 6, '0', STR_PAD_LEFT);
    }
}
