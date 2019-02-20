<?php

use Illuminate\Database\Seeder;

class ComprasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	$compras = [
        	[
        		"cantidad" => "2",
        		"producto" => "Postres",
        		"created_at" => now(),
        		"updated_at" => now()
        	],
        	[
        		"cantidad" => "4",
        		"producto" => "Camisas",
        		"created_at" => now(),
        		"updated_at" => now()
        	],
        	[
        		"cantidad" => "2",
        		"producto" => "Calzados",
        		"created_at" => now(),
        		"updated_at" => now()
        	],
        	[
        		"cantidad" => "12",
        		"producto" => "Panes",
        		"created_at" => now(),
        		"updated_at" => now()
        	],
        	[
        		"cantidad" => "3",
        		"producto" => "Peliculas",
        		"created_at" => now(),
        		"updated_at" => now()
        	],
        	
        ];

        App\Compra::insert($compras);
    }
}
