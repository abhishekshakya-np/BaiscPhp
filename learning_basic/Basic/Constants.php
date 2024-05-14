<?php
//Constants are like variables, except that once they are defined they cannot be changed or undefined.
// case-sensitive constant name
// define("MONTH", "case-sensitive constant name!");
// echo MONTH;
// echo "<br>";

define("GREETING", "case-insensitive constant name!");
echo constant('GREETING'); // Outputs: case-insensitive constant name!
echo "<br>"; 



?>