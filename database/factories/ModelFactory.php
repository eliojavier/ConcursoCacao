<?php

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| Here you may define all of your model factories. Model factories give
| you a convenient way to create models for testing and seeding your
| database. Just tell the factory how a default model should look.
|
*/

//$factory->define(App\User::class, function (Faker\Generator $faker) {
//    static $password;
//
//    return [
//        'name' => $faker->name,
//        'email' => $faker->safeEmail,
//        'password' => $password ?: $password = bcrypt('secret'),
//        'remember_token' => str_random(10),
//    ];
//});

$factory->define(App\Judge::class, function (Faker\Generator $faker) {

    return [
        'name' => $faker->name,
        'email' => $faker->safeEmail,
        'phone' => $faker->e164PhoneNumber,
    ];
});

$factory->define(App\User::class, function (Faker\Generator $faker) {

    return [
        'name' => $faker->firstName,
        'last_name' => $faker->lastName,
        'email' => $faker->safeEmail,
        'doc_id' => $faker->ean8,
        'password' => $faker->bcrypt('123456'),
        'birthday' => $faker->date,
        'phone' => $faker->e164PhoneNumber,
        'address' => $faker->address,
        'twitter' => $faker->firstName,
        'instagram' => $faker->firstName,
        'size' => $faker->firstName,
    ];
});

DB::table('users')->insert([

    'size' => 'M',
    'category' => 'Estudiante/Profesional',
    'type' => 'N/A',
    'city_id' => 1,
    'academy_id' => 1,
]);
