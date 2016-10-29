<?php

require 'vendor/autoload.php';

//Carbon - show date

use Carbon\Carbon;

printf("Now: %s", Carbon::now());

//Faker - show random data

$faker = Faker\Factory::create();

for ($i=0; $i < 10; $i++) {
  echo $faker->name;
  echo "<br/>";
  echo $faker->address;
  echo "<br/>";
  echo $faker->text;
  echo "<br/>";
  echo "<br/>";
  echo "<br/>";
  echo "<br/>";
}

