<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\DetalleCompra;

class Compra extends Model
{
    public function detalles()
    {
        return $this->hasMany(DetalleCompra::class);
    }
}
