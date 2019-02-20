<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PeliculaController extends Controller
{
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $generos = ["drama", "comedia", "accion", "terror"];

        if (in_array(strtolower($id), $generos)){
            return view("peliculas")
                ->withGenero($id);
        } else {
            abort(404);
        }
    }
}
