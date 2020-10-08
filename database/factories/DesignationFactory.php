<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\designation;
use Faker\Generator as Faker;

$factory->define(designation::class, function (Faker $faker) {
    return [
	    'title' => $this->faker->title,
	];
});
