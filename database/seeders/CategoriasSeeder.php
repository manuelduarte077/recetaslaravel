<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategoriasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       	DB::table('categoria_receta')->insert([
       		'nombre' => 'Comida Mexicana',
       		'created_at' => date('Y-m-d H:i:s'),
       		'updated_at' => date('Y-m-d H:i:s'),
		]);

		DB::table('categoria_receta')->insert([
			'nombre' => 'Comida Colombiana',
			'created_at' => date('Y-m-d H:i:s'),
			'updated_at' => date('Y-m-d H:i:s'),
		]);

		DB::table('categoria_receta')->insert([
			'nombre' => 'Comida Peruana',
			'created_at' => date('Y-m-d H:i:s'),
			'updated_at' => date('Y-m-d H:i:s'),
		]);

		DB::table('categoria_receta')->insert([
			'nombre' => 'Comida Argentina',
			'created_at' => date('Y-m-d H:i:s'),
			'updated_at' => date('Y-m-d H:i:s'),
		]);

		DB::table('categoria_receta')->insert([
			'nombre' => 'Comida Panameña',
			'created_at' => date('Y-m-d H:i:s'),
			'updated_at' => date('Y-m-d H:i:s'),
		]);

		DB::table('categoria_receta')->insert([
			'nombre' => 'Comida Nicaraguense',
			'created_at' => date('Y-m-d H:i:s'),
			'updated_at' => date('Y-m-d H:i:s'),
		]);

		DB::table('categoria_receta')->insert([
			'nombre' => 'Ensaladas',
			'created_at' => date('Y-m-d H:i:s'),
			'updated_at' => date('Y-m-d H:i:s'),
		]);
    }
}
