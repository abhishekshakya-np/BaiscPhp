<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body {
            display: grid;
            place-items: center;
            height: 100vh;
            margin: 0;
            font-family: sans-serif;
        }
    </style>
</head>

<body>
    <?php
    // Define a variable $book_name and assign the value "The Alchemist" to it.
    $book_name = "The Alchemist";

    // Define a variable $read and assign the value true to it.
    //  $read = true;
    $read = false;
    // Check if the $read variable is true.
    if ($read) {
        // If $read is true, create a message indicating that the book has been read.
        // The message includes the value of the $book_name variable.
        $message = "You have read $book_name";
    } else {
        $message = "You have not read $book_name";
    }
    ?>
    <h1>
        
         <?php echo $message; ?>  
         
        <?= $message; ?> <!-- alternative way to print -->
    </h1>

</body>

</html>