<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'nombre' => 'Elio',
            'apellido' => 'Acosta',
            'email' => 'eliojavier86@gmail.com',
            'cedula' => '17146579',
            'password' => bcrypt(123456),
            'fecha_nacimiento' => DateTime::createFromFormat('d/m/Y', '29/01/1986')->format('Y-m-d'),
            'telefono' => '04261058185',
            'direccion' => 'San Martín',
            'twitter' => 'eliojavier',
            'instagram' => 'eliojavier',
            'talla' => 'M',
            'categoria' => 'Estudiante/Profesional',
            'tipo' => 'N/A',
            'lugar_id' => 1,
            'academia_id' => 1,
        ]);
    }
}
