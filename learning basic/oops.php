<!-- object orentented programming -->

<?php
class student
{
    function __construct(){
        echo "__construct";
        echo "<br>";
        
    }
    function test(){

        echo "hello";
    }
    
    function __distruct(){
        echo "__distruct";
        
    }
}

class student1 extends student
{

    function test2(){

        echo "hello2 ";
    }
    
}
$obj= new student1();
$obj->test2();

?>