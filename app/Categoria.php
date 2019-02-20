<?php

namespace App;

use App\DetalleCompra;
use Illuminate\Database\Eloquent\Model;

class Categoria extends Model
{
    public function detalleCompras()
    {
        return $this->hasMany(DetalleCompra::class);
    }
}
