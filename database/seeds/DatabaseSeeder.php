<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call(LugarsTablesSeeder::class);
        $this->call(AcademiasTableSeeder::class);
        $this->call(UsersTableSeeder::class);
        $this->call(IngredientesTableSeeder::class);
    }
}
