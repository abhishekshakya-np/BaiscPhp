<?php
include("db.php");

if(!isset($_SESSION["IS_LOGIN"])){
    header("location:Login.php");
    die();
}

$id =  $_GET['id'];

if(isset($_POST['submit'])){    
    $name = $_POST['name'];
    $city = $_POST['city'];
    mysqli_query($con,"update student set name='$name',city='$city' where id='$id'");
    header("location:index.php");
    die();
}


$res=mysqli_query($con,"select * from student where id='$id'");
if (mysqli_num_rows($res)==0){
    header("location:index.php");
    die();
}
$row=mysqli_fetch_array($res);
$name=$row['name'];
$city=$row['city'];
?>
<a href="logout.php">Logout</a>
<form method="post" >
    <table>
        <tr>
            <td>Name</td>
            <td><input type="textbox" name="name"
            value="<?php echo $name; ?>"></td>
        </tr>
        <tr>
            <td>City</td>
            <td><input type="text" name="city"
            value="<?php echo $city; ?>"></td>
        </tr>
        <tr>
            <td>Name</td>
            <td><input type="submit" name="submit"></td>
        </tr>
    </table>
</form>