<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Categoria;
use App\Compra;

class DetalleCompra extends Model
{
    public function compra()
    {
        return $this->belongsTo(Compra::class);
    }

    public function categoria()
    {
        return $this->belongsTo(Categoria::class);
    }
}
