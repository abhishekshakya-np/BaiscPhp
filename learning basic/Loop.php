<?php
for ($x = 0; $x <= 10; $x++) {
    echo "for loop for Num from o to 10:::::> $x <br>";
}

for ($x = 0; $x <= 10; $x++) {
    echo "for loop for multiple of 2 from o to 10::::>"  . 2*$x . "<br>";
}

$x=1;
while ($x <= 10) {
    echo "while loop for multiple of 2 form 0 to 10::>" . 2*$x . "<br>";
    $x++;
}

$x=1;
do {
    echo "do loop until while loop is 10 for multiple of 2 form 0 to x::>" . 2*$x . "<br>";
    $x++;
} while ($x <= 10); 



?>