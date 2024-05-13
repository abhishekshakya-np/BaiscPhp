<?php


/* non-parameterized function
 function add () {
    echo "Its php function";
}
add(); 

function add () { //parameterized function
    return 10; // return statement work as a return value
}
$x=add();
echo $x + 5; */

function add ($x, $y=5) { //parameterized function
    echo $x + $y;
}
 add(10,30);

?>