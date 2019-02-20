<?php

use Illuminate\Database\Seeder;

class DetallesComprasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $detallesCompras = [
        	[
        		"compra_id" => 1,
        		"nombre" => "Bomba",
        		"precio" => 3000,
        		"categoria_id" => 1,
        		"created_at" => now(),
        		"updated_at" => now()
        	],
        	[
        		"compra_id" => 1,
        		"nombre" => "Milhohas",
        		"precio" => 1830,
        		"categoria_id" => 1,
        		"created_at" => now(),
        		"updated_at" => now()
        	],
        	[
        		"compra_id" => 2,
        		"nombre" => "Camiseta Algoodon",
        		"precio" => 12000,
        		"categoria_id" => 2,
        		"created_at" => now(),
        		"updated_at" => now()
        	],
        	[
        		"compra_id" => 2,
        		"nombre" => "Camisa de Vestir",
        		"precio" => 17622,
        		"categoria_id" => 2,
        		"created_at" => now(),
        		"updated_at" => now()
        	],
        	[
        		"compra_id" => 3,
        		"nombre" => "Zapatos Deportivos",
        		"precio" => 330000,
        		"categoria_id" => 2,
        		"created_at" => now(),
        		"updated_at" => now()
        	],
        	[
        		"compra_id" => 3,
        		"nombre" => "Cholas",
        		"precio" => 10999,
        		"categoria_id" => 2,
        		"created_at" => now(),
        		"updated_at" => now()
        	],
        	[
        		"compra_id" => 4,
        		"nombre" => "Pan Frances",
        		"precio" => 300,
        		"categoria_id" => 1,
        		"created_at" => now(),
        		"updated_at" => now()
        	],
        	[
        		"compra_id" => 4,
        		"nombre" => "Panes Dulces",
        		"precio" => 450,
        		"categoria_id" => 1,
        		"created_at" => now(),
        		"updated_at" => now()
        	],
        	[
        		"compra_id" => 4,
        		"nombre" => "Pan Campesino",
        		"precio" => 1999,
        		"categoria_id" => 1,
        		"created_at" => now(),
        		"updated_at" => now()
        	],
        	[
        		"compra_id" => 5,
        		"nombre" => "El Origine",
        		"precio" => 9999,
        		"categoria_id" => 3,
        		"created_at" => now(),
        		"updated_at" => now()
        	],
        	[
        		"compra_id" => 5,
        		"nombre" => "Jobs",
        		"precio" => 8999,
        		"categoria_id" => 3,
        		"created_at" => now(),
        		"updated_at" => now()
        	],
        	[
        		"compra_id" => 5,
        		"nombre" => "Red Social",
        		"precio" => 5999,
        		"categoria_id" => 3,
        		"created_at" => now(),
        		"updated_at" => now()
        	]
        ];

        App\DetalleCompra::insert($detallesCompras);
    }
}
