<!--  <?php
echo '<pre>';
print_r($_POST);

?>
<form method="get">
    <input type="text" name="name"> 
    <input type="submit" value="Submit">
</form>

<form method="post">
    <input type="text" name="name"> 
    <input type="submit" value="Submit">
</form>

 -->


<?php
$Num1 = $_POST['Num1'];
$Num2 = $_POST['Num2'];
echo  $Num1 + $Num2;

?>

<form method="post">
    <input type="text" name="Num1" placeholder="Enter your number"><br><br> 
    <input type="text" name="Num2" placeholder="Enter your number"><br><br>
    <input type="submit" value="Submit">
</form>