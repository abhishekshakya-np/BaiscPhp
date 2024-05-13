<?php
// Index array
// In indexed arrays each item has an index number.
$arr=array(10,20,30,40,50); // 0,1,2,3,4
echo '<pre>';  // display the array and pre is used for better view
print_r($arr); // PRINT_R is used to display the array
echo "<br>";



$arr=array("WORD", "WORD1", "WORD2"); 
foreach ($arr as $value) { //foreach loop is used to display the array
    echo $value;
    echo "<br>";
}

$arr=array("WORD3", "WORD4", "WORD5"); 
foreach ($arr as $key=>$val) {
    echo $val;
    echo "<br>";
}


// Associative arrays are arrays that use named keys that you assign to them.
$arr=array("name"=>"xabick","city"=>"Ktm"); 
echo '<pre>';
print_r($arr);
echo"<br>";

$arr=array("name"=>"xabick","city"=>"Ktm");

foreach ($arr as $key=>$val) {
    echo $val;
    echo "<br>";
}


$arr=array("I am 0", "i am 1", "i am 2");
echo $arr[0];


// multidimensional array is an array containing one or more arrays.
$arr=array(array(1,2,3),array(4,5,6),array(7,8,9)); 
echo '<pre>';
print_r($arr);
echo"<br>";


$arr=array("I am 0"=>array
("name"=>"xabick","city"=>"Ktm",
"country"=>"Nepal", "hobby"=>array
("hobby1"=>"cricket","hobby2"=>"football","hobby3"=>"badminton"
)));
echo '<pre>';
print_r($arr);
echo"<br>";


$arr=array("I am 0"=>array
("name"=>"xabick","city"=>"Ktm",
"country"=>"Nepal", "hobby"=>array
("hobby1"=>"cricket","hobby2"=>"football","hobby3"=>"badminton"
))); // this will create a multidimensional array
echo '<pre>'; // print_r is used to display the array
print_r($arr["I am 0"]["hobby"]["hobby3"]);     // display the array by key
echo"<br>";



$arr=array("I am 0", "i am 1", "i am 2"); // 0,1,2
echo count($arr);   // count is used to count the array
echo "<br>";


$arr=array("I am 0", "i am 1", "i am 2"); // 0,1,2
sort ($arr);
print_r($arr);   // sort is used to sort the array
echo "<br>";

$arr=array("I am 0", "i am 1", "i am 2"); // 0,1,2
ksort ($arr);
print_r($arr);   // ksort is used to sort the array by opposite
echo "<br>";


// foreach loop is used to display the array
$arrCity=array("Kathmandu","Lalitpur","Pokhara","Chitwan","Butwal","Bhaktapur");
sort ($arr); // sort is used to sort the array
?>

<select name="city">
  <option value="City">Select city</option>
  <?php
  foreach  // foreach loop is used to display the array
  ($arrCity as $city) { // count is used to count the array
    echo "<option>$city</option>"; 
  }
  ?>
</select>



<?php
// for loop is used to display the array
$arrCity=array("Kathmandu","Lalitpur","Pokhara","Chitwan","Butwal","Bhaktapur");
for($i=0;$i<count($arrCity);$i++){
    echo "<option>$arrCity[$i]</option>"; // count is used to count the array
    echo "<br>"; echo "<br>"; 
    /* br is used to create space between the array 
    and next array but used 2 time for better view */
}


$arrCity=array("Kathmandu","Lalitpur","Pokhara","Chitwan","Butwal","Bhaktapur");
for($i=0;$i<count($arrCity);$i++){
    echo $arrCity[$i]; // count is used to count the array
    echo "<br>";
}
?>