<?php

use Illuminate\Database\Seeder;

class LugarsTablesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('lugars')->insert(['nombre' => 'Amazonas']);
        DB::table('lugars')->insert(['nombre' => 'Anzoategui']);
        DB::table('lugars')->insert(['nombre' => 'Apure']);
        DB::table('lugars')->insert(['nombre' => 'Aragua']);
        DB::table('lugars')->insert(['nombre' => 'Barinas']);
        DB::table('lugars')->insert(['nombre' => 'Bolívar']);
        DB::table('lugars')->insert(['nombre' => 'Carabobo']);
        DB::table('lugars')->insert(['nombre' => 'Cojedes']);
        DB::table('lugars')->insert(['nombre' => 'Delta amacuro']);
        DB::table('lugars')->insert(['nombre' => 'Distrito capital']);
        DB::table('lugars')->insert(['nombre' => 'Falcón']);
        DB::table('lugars')->insert(['nombre' => 'Guárico']);
        DB::table('lugars')->insert(['nombre' => 'Lara']);
        DB::table('lugars')->insert(['nombre' => 'Miranda']);
        DB::table('lugars')->insert(['nombre' => 'Monagas']);
        DB::table('lugars')->insert(['nombre' => 'Mérida']);
        DB::table('lugars')->insert(['nombre' => 'Nueva Esparta']);
        DB::table('lugars')->insert(['nombre' => 'Portuguesa']);
        DB::table('lugars')->insert(['nombre' => 'Sucre']);
        DB::table('lugars')->insert(['nombre' => 'Trujillo']);
        DB::table('lugars')->insert(['nombre' => 'Táchira']);
        DB::table('lugars')->insert(['nombre' => 'Vargas']);
        DB::table('lugars')->insert(['nombre' => 'Yaracuy']);
        DB::table('lugars')->insert(['nombre' => 'Zulia']);
    }
}
