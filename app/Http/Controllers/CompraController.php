<?php

namespace App\Http\Controllers;

use App\Categoria;
use App\Compra;
use App\DetalleCompra;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CompraController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $compras = Compra::with('detalles')->get();

        $totales = DB::table('compras')
            ->join('detalle_compras', 'compras.id', '=', 'detalle_compras.compra_id')
            ->join('categorias', 'categorias.id', '=', 'detalle_compras.categoria_id')
            ->select('categorias.nombre', DB::raw('SUM(compras.cantidad * detalle_compras.precio) as precio_total'))
            ->groupBy('categorias.id')
            ->get();

        return view("compras")
            ->withCompras($compras)
            ->withTotales($totales);
    }
}
