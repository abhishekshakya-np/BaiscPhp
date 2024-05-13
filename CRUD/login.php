<?php

include("db.php"); 
if(isset($_POST["Submit"]))
{
    $username = $_POST['username'];
    $password = $_POST['password'];

    $res=mysqli_query($con,"select * from admin_user where username='$username' and password='$password'");
    if(mysqli_num_rows($res)> 0){
        $_SESSION['IS_LOGIN'] = 'Yes';
        header('location:index.php');
        die(); 
    }else{
        echo "Invalid username or password";
    }
}
?>

<form action="" method="post">
<table>
    <tr>
        <td>Username</td>
        <td><input type="textbox" name="username"></td>
    </tr>
    <tr>
        <td>password</td>
        <td><input type="password" name="password"></td>
    </tr>
    <tr>
        <td></td>
        <td><input type="submit" name="Submit"></td>
    </tr>
</table>
</form>