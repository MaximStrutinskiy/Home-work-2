<?php

require 'vendor/autoload.php';

//Carbon - show date

use Carbon\Carbon;

printf("Now: %s", Carbon::now());

//Faker - show random data

$faker = Faker\Factory::create();

for ($i=0; $i < 10; $i++) {
  echo $faker->name;
  echo $faker->address;
  echo $faker->text;
}

