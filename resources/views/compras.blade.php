@extends('layouts.app')

@section('contenido')   
    <h1>Compras</h1>
    @forelse ($compras as $compra)
        <table class="table-hover table-striped table-condensed table-bordered w-100">
            <caption>Compra: {{ $compra->id }} | Producto: {{ $compra->producto }} | Cantidad: {{ $compra->cantidad }}</caption>
            <th>id</th>
            <th>Nombre</th>
            <th>Precio</th>
            <th>Categoría</th>
            @forelse ($compra->detalles as $detalle)
                <tr>
                    <td>{{ $detalle->id }}</td>
                    <td>{{ $detalle->nombre }}</td>
                    <td>{{ $detalle->precio }}</td>
                    <td>{{ $detalle->categoria->nombre }}</td>
                </tr>
            @empty
                <tr>
                    <td colspan="4">No hay Datos.</td>
                </tr>
            @endforelse
        </table>
    @empty
        <h2>No hay Compras.</h2>
    @endforelse
    
    <br>
    
    <h1>Totales</h1>
    
    <table class="table-hover table-striped table-condensed table-bordered w-100">
        <th>Categoría</th>
        <th>Precio</th>
        @forelse ($totales as $total)
            <tr>
                <td>{{ $total->nombre }}</td>
                <td>{{ $total->precio_total }}</td>
            </tr>
        @empty
            <tr>
                <td colspan="2">No hay Datos.</td>
            </tr>
        @endforelse 
    </table>
@endsection