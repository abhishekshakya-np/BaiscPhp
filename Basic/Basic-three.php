<!-- PHP Strings
Strings in PHP are surrounded by either double quotation marks, or single quotation marks. -->

<?php

echo "PHP Strings";
echo "<br>";
print "PHP Strings";
echo "<br>";

// Double quoted strings perform action on special characters.
$x = "Double";
echo "quoted $x";
echo "<br>";

// Single quoted strings it returns the string like it was written
$q = "Single";
echo 'quoted $q';
echo "<br>";

// strlen() function returns the length of a string.
echo strlen("Hello world!");
echo "<br>";

// function counts the number of words in a string.
echo str_word_count("Hello world!");
echo "<br>";

// function counts the number of words in a string.
echo strpos("Hello world!", "world");
echo "<br>";


// PHP - Modify Strings
// PHP has a set of built-in functions that you can use to modify strings.
// function returns the string in upper case:
$x = "Hello World!";
echo strtoupper($x);
echo "<br>";

// function returns the string in lower case:

$x = "HELLO WORLD!";
echo strtolower($x);
echo "<br>";


// function replaces some characters with some other characters in a string.
// Replace the text "World" with "Dolly":
$x = "Hello World!";
echo str_replace("World", "Dolly", $x);  
echo "<br>";


// Reverse the string "Hello World!":
$x = "Hello World!";
echo strrev($x);
echo "<br>";


// removes any whitespace from the beginning or the end:
$x = " Hello World! ";
echo trim($x);
echo "<br>";
echo "<input value='" . $x . "'>";
echo "<br>";
echo "<input value='" . trim($x) . "'>";
echo "<br>";
// The whitespaces are invisible in plain HTML,
// but check out the difference in two input fields:



// Convert String into Array
// Split the string into an array. Use the space character as separator:

$x = "Hello World!";
$y = explode(" ", $x);
//Use the print_r() function to display the result:
print_r($y);
echo "<br>";


// PHP - Concatenate Strings
// String Concatenation
// link together or combine, two strings you can use the . operator:
$x = "String";
$y = "Concatenation";
$z = $x . $y;
echo $z;
echo "<br>";


// You can add a space character like this
$x = "See";
$y = "whitespace";
$z = $x . " " . $y;
echo $z;
echo "<br>";


// An easier and better way is by using the power of double quotes.
$x = "Easy";
$y = "Whitespace";
$z = "$x $y";
echo $z;
echo "<br>";


// PHP - Slicing Strings
// Slicing You can return a range of characters by using the substr() function.
// Start the slice at index 6 and end the slice 5 positions later:
$x = "Slicing Strings!";
echo substr($x, 6, 5);
echo "<br>";


// Slice to the End
// Start the slice at index 6 and go all the way to the end:
$x = "Slicing Strings!";
echo substr($x, 6);
echo "<br>";



// Slice From the End
// Get the 3 characters, starting from the "o" in world (index -5):
$x = "Slicing Strings!";
echo substr($x, -5, 3);
echo "<br>";


// Negative Length
$x = "get the characters starting from 
index 5character from the end (index -4)";
echo substr($x, 5, -4);
echo "<br>";


// Escape Character
// To insert characters that are illegal in a string, use an escape character.

// $x = "We are the so-called "Vikings" from the north."; // PHP will raise an error when executing this statement:

$x = "We are the so-called \"Vikings\" from the north."; 
//  \'	Single Quote
echo $x;
echo "<br>";

$x = 'We are the so-called \'Vikings\' from the north.'; 
//  \" Double Quote
echo $x;
echo "<br>";

$x = "Escape php variable name \$myvar";   
//  \$	PHP variables
echo $x;
echo "<br>";


$x = "whitespace\norline\nbreaks"; 
// \n New Line
echo $x;
echo "<br>";


$x = "whitespace\ror\rline\rbreaks"; 
// \r Carriage Return
echo $x;
echo "<br>";


$x = "Hello\tWorld"; 
// \t	Tab
echo $x;
echo "<br>";



?>
<a href="Basic-two.php">basic 3</a>