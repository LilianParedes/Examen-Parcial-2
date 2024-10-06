<?php
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
       
        // Insertar categorías
        DB::table('categorias')->insert([
            ['nombre' => 'Electrónica'],
            ['nombre' => 'Ropa'],
            ['nombre' => 'Hogar']
        ]);

        // Insertar productos
        DB::table('productos')->insert([
            ['nombre' => 'Computadora', 'descripcion' => 'HP Windows 11', 'precio' => 8900, 'stock' => 10, 'categoria_id' => 1], // Asegúrate que la categoria_id exista
            ['nombre' => 'Vestido', 'descripcion' => 'Vestido azul, para fiesta', 'precio' => 560, 'stock' => 50, 'categoria_id' => 2], // Asegúrate que la categoria_id exista
            ['nombre' => 'Microhondas', 'descripcion' => 'Horno Microhondas Hamilton Beach- 0.9 Inox', 'precio' => 900, 'stock' => 40, 'categoria_id' => 3] // Asegúrate que la categoria_id exista
        ]);
    }
}
