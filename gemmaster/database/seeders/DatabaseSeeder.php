<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Categoria;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
        $cat_mueble = new Categoria();
        $cat_mueble->nombre = "Mueble";
        $cat_mueble->descripcion = "muebles de todo tipo";

        $cat_mueble->save();

        $cat_ropa = new Categoria();
        $cat_ropa->nombre = "Ropa";
        $cat_ropa->descripcion = "ropas de moda";

        $cat_ropa->save();

        $cat_accesorio = new Categoria();
        $cat_accesorio->nombre = "Accesorio";
        $cat_accesorio->descripcion = "accesorios para damas y caballeros";

        $cat_accesorio->save();
    }
}
