<?php

// Eqaul to
$x = 5;
// single = will work to Initialize a variable
if ($x == 5) { //Double == will work to compare two values
    echo "Yes the value of x is 5";
    echo "<br>";
}


$x = "5"; 
if ($x === "5") { //triple === will work to compare two values and check the data type
    echo "yes the value of x is Integer 5";
    echo "<br>";
}


$x = 5; 
if ($x>3) { 
    echo "yes it was greater than 3";
    echo "<br>";
}

// Greater or Lesser
$x = 5; 
if ($x<6) { 
    echo "yes it was lesser than 6";
    echo "<br>";
}


$x = 5; 
if ($x!=6) { 
    echo "yes x is not equal to 6";
    echo "<br>";
}


//Logical operator
$Num = 700; 
if ($Num>600) { 
    echo "yes it was greater than 600";
    echo "<br>";
}else{
    echo "no it was not greater than 600";
    echo "<br>";
}


$Num = 500; 
if ($Num>600) { 
    echo "yes it was greater than 600";
    echo "<br>";
}elseif($Num>=400 && $Num<=600){
    echo "Yes it was between 400 and 600";
    echo "<br>";
}else{
    echo "no it was not greater than 600";
    echo "<br>";
}







?>