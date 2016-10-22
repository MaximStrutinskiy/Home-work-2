<?php
echo "<h1>Home work 2: install composer, php libraries. Work with Git</h1>";

//Carbon - show date
echo "<h2>Carbon - show date</h2>";

require 'vendor/autoload.php';

use Carbon\Carbon;

printf("Now: %s", Carbon::now());

echo "<br/><br/>";


//Faker - show random data
echo "<h2>Faker - show random data</h2>";
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

