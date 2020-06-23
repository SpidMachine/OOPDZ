<?php

include("src/autoload.php");

$array = new TArray([1, 2, 3, 4, 5]);
echo $array->max();
echo "<br>";
echo $array->min();
echo "<br>";
echo $array->avg();