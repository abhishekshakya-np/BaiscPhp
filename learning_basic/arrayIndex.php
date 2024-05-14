<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>
        Recommended Books
    </h1>

    <?php // variable can house a collection of thing 
    $books = [ // and this is an array is specifically used to store collection of data 
        "The Alchemist",
        "To Kill a Mockingbird",
        "The Great Gatsby",
        "1984",
        "Pride and Prejudice",
        "The Catcher in the Rye",
        "The Lord of the Rings",
        "The Hobbit",
        "The Picture of Dorian Gray",
    ];    
    ?>

    <ul>
         <?php
        /*  This is a first way to print the array
         foreach($books as $book){
             echo "<li>$book</li>";
         }  */


         /* if need to add some data to the array we can do it like this bracket
         foreach($books as $book){
            echo "<li>{$book}®</li>";
        } */


        //This is alternative for first way to print the array
            foreach ($books as $book) : ?>
            <li>
                <?=  $book; ?>
            </li>
            <?php 
            endforeach; 
            
            ?>


    
    </ul>


    
</body>
</html>