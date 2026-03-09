<?php
namespace App\Observers;
use App\Models\Compra;
use Illuminate\Support\Facades\DB;



class CompraObserver
{
    public function updated(Compra $compra)
    {
        // Solo actuamos si el estado cambió a 'Recibido'
        if ($compra->wasChanged('estado') && $compra->estado === 1) {
            
            $compra->load('detallecompras');
            
            DB::transaction(function () use ($compra) {
                foreach ($compra->detallecompras as $detalle) {
                    $producto = $detalle->producto;

                    if ($producto) {
                        // INCREMENTAMOS el stock actual
                        $producto->increment('stock_actual', $detalle->cantidad);
                        
                    }
                }
            });
        }
    }
}
