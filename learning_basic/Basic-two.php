<?php 
// PHP Variables Scope
// Global and Local Scope


// outside a function has a GLOBAL SCOPE and can only be accessed outside a function
$r = 5; // global scope
 function myTest() {
  // using x inside this function will generate an error
//   echo "<p>Variable x inside function is:  $r  </p>";
} 
myTest();
echo "<p>Variable x outside function is: $r</p>";




// declared within a function has a LOCAL SCOPE and can only be accessed within that function
function Test() {
    $t = 5; // local scope
    echo "<p>Variable x inside function is: $t</p>";
  } 
  Test();

  // using x outside the function will generate an error
//   echo "<p>Variable x outside function is: /* $t */ </p>";



$x = 5;
$y = 1;

function east() {
  global $x, $y; // global keyword is used to access a global variable from within a function.
  $y = $x + $y;
} 

east();  // run function
echo $y;
echo "<br>";

// PHP also stores all global variables in an array called $GLOBALS[index]. The index holds the name of the variable. This array is also accessible from within functions and can be used to update global variables directly.
$u = 5;
$i = 10;

function west() {
  $GLOBALS['i'] = $GLOBALS['u'] + $GLOBALS['i'];
} 

west();
echo $i;

?> 


