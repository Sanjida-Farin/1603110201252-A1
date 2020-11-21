<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Employee;
use Faker\Generator as Faker;

$factory->Define(Employee::class, function (Faker $faker) {
    return [
        'id' => $faker->idNumber,
        'name' => $faker->name,
        'email' => $faker->email,
        'address' => $faker->address,
        'salary' => $faker->numberBetween($min = 1000, $max = 90000),
        'status' => $faker->text,
        'department_id' => $faker->idnumber,
        
    ];
});
