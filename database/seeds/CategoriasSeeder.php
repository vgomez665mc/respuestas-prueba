<?php

use Illuminate\Database\Seeder;

class CategoriasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $categorias = [
        	[
        		"nombre" => "Comida",
        		"created_at" => now(),
        		"updated_at" => now()
        	],
        	[
        		"nombre" => "Ropa",
        		"created_at" => now(),
        		"updated_at" => now()
        	],
        	[
        		"nombre" => "Entretenimiento",
        		"created_at" => now(),
        		"updated_at" => now()
        	]
        ];

        App\Categoria::insert($categorias);

    }
}
