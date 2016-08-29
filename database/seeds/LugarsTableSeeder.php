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
        DB::table('lugars')->insert(['nombre' => 'amazonas']);
        DB::table('lugars')->insert(['nombre' => 'anzoategui']);
        DB::table('lugars')->insert(['nombre' => 'apure']);
        DB::table('lugars')->insert(['nombre' => 'aragua']);
        DB::table('lugars')->insert(['nombre' => 'barinas']);
        DB::table('lugars')->insert(['nombre' => 'bolívar']);
        DB::table('lugars')->insert(['nombre' => 'carabobo']);
        DB::table('lugars')->insert(['nombre' => 'cojedes']);
        DB::table('lugars')->insert(['nombre' => 'delta amacuro']);
        DB::table('lugars')->insert(['nombre' => 'distrito capital']);
        DB::table('lugars')->insert(['nombre' => 'falcón']);
        DB::table('lugars')->insert(['nombre' => 'guárico']);
        DB::table('lugars')->insert(['nombre' => 'lara']);
        DB::table('lugars')->insert(['nombre' => 'miranda']);
        DB::table('lugars')->insert(['nombre' => 'monagas']);
        DB::table('lugars')->insert(['nombre' => 'mérida']);
        DB::table('lugars')->insert(['nombre' => 'nueva esparta']);
        DB::table('lugars')->insert(['nombre' => 'portuguesa']);
        DB::table('lugars')->insert(['nombre' => 'sucre']);
        DB::table('lugars')->insert(['nombre' => 'trujillo']);
        DB::table('lugars')->insert(['nombre' => 'táchira']);
        DB::table('lugars')->insert(['nombre' => 'vargas']);
        DB::table('lugars')->insert(['nombre' => 'yaracuy']);
        DB::table('lugars')->insert(['nombre' => 'zulia']);
    }
}
