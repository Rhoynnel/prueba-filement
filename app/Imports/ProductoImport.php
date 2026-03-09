<?php

namespace App\Imports;

use App\Models\Producto;
use App\Models\Categoria;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class ProductoImport implements ToModel, WithHeadingRow
{
    public function model(array $row)
    {
        // Buscar o crear la categoría
        $categoria = Categoria::firstOrCreate(['name' => $row['categoria']]);

        return new Producto([
            'codigo' => $row['codigo'],
            'barras' => $row['barras'] ?? null,
            'nombre' => $row['nombre'],
            'categoria_id' => $categoria->id,
            'precio_compra' => $row['precio_compra'] ?? 0,
            'precio_venta' => $row['precio_venta'] ?? 0,
            'stock_actual' => $row['stock_actual'] ?? 0,
        ]);
    }
}