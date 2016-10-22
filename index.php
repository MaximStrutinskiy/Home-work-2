<?php
echo "<h1>Home work 2: install composer, php libraries. Work with Git</h1>";

//Carbon - show date
echo "<h2>Carbon - show date</h2>";

require 'vendor/autoload.php';

use Carbon\Carbon;

printf("Now: %s", Carbon::now());

echo "<br/><br/>";


