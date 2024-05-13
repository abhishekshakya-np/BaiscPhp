<?php
include("db.php");
if(!isset($_SESSION["IS_LOGIN"])){
    header("location:Login.php");
    die();
}   
if(isset($_POST['submit'])){    
    $name = $_POST['name'];
    $city = $_POST['city'];
    mysqli_query($con,"insert into student (name,city)
    values('$name','$city')") ;
    header("location:index.php");
    die();
}
?>
<a href="logout.php">Logout</a>
<form method="post" >
    <table>
        <tr>
            <td>Name</td>
            <td><input type="textbox" name="name"></td>
        </tr>
        <tr>
            <td>City</td>
            <td><input type="text" name="city"></td>
        </tr>
        <tr>
            <td>Name</td>
            <td><input type="submit" name="submit"></td>
        </tr>
    </table>
</form>