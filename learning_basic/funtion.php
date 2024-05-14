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
        [
            "name" => "The Alchemist",
            "author" => "Paulo Coelho",
            "price" => 10.99,
            "year" => 1988,
            "genre" => "Fiction",
            "ISBN" => "9780061120084",
            "purchaseUrl" => "https://www.amazon.com/Alchemist-Paulo-Coelho/dp/0061120086"
        ],
        [
            "name" => "To Kill a Mockingbird",
            "author" => "Paulo Coelho",
            "price" => 10.99,
            "year" => 1988,
            "genre" => "Fiction",
            "ISBN" => "9780061120084",
            "purchaseUrl" => "https://www.amazon.com/Alchemist-Paulo-Coelho/dp/0061120086"
        ],
        [
            "name" => "The Great Gatsby",
            "author" => "Paulo Coelho",
            "price" => 10.99,
            "year" => 1988,
            "genre" => "Fiction",
            "ISBN" => "9780061120084",
            "purchaseUrl" => "https://www.amazon.com/Alchemist-Paulo-Coelho/dp/0061120086"
        ],
        [
            "name" => "1984",
            "author" => "Pasadulo Coelho",
            "price" => 10.99,
            "year" => 1988,
            "genre" => "Fiction",
            "ISBN" => "9780061120084",
            "purchaseUrl" => "https://www.amazon.com/Alchemist-Paulo-Coelho/dp/0061120086"
        ],
        [
            "name" => "Pride and Prejudice",
            "author" => "Paulo Coeaslho",
            "price" => 10.99,
            "year" => 1988,
            "genre" => "Fiction",
            "ISBN" => "9780061120084",
            "purchaseUrl" => "https://www.amazon.com/Alchemist-Paulo-Coelho/dp/0061120086"
        ],
        [
            "name" => "The Catcher in the Rye",
            "author" => "Paudaslo Coelho",
            "price" => 10.99,
            "year" => 1988,
            "genre" => "Fiction",
            "ISBN" => "9780061120084",
            "purchaseUrl" => "https://www.amazon.com/Alchemist-Paulo-Coelho/dp/0061120086"
        ],
        [
            "name" => "The Lord of the Rings",
            "author" => "Paulo Coedsalho",
            "price" => 10.99,
            "year" => 1988,
            "genre" => "Fiction",
            "ISBN" => "9780061120084",
            "purchaseUrl" => "https://www.amazon.com/Alchemist-Paulo-Coelho/dp/0061120086"
        ],
        [
            "name" => "The Hobbit",
            "author" => "Paulo Coefsdlho",
            "price" => 10.99,
            "year" => 1988,
            "genre" => "Fiction",
            "ISBN" => "9780061120084",
            "purchaseUrl" => "https://www.amazon.com/Alchemist-Paulo-Coelho/dp/0061120086"
        ],
        [
            "name" => "The Picture of Dorian Gray",
            "author" => "Pausadlo Coelho",
            "price" => 10.99,
            "year" => 1988,
            "genre" => "Fiction",
            "ISBN" => "9780061120084",
            "purchaseUrl" => "https://www.amazon.com/Alchemist-Paulo-Coelho/dp/0061120086"
        ],
    ];
    ?>

    <ul>
       
        <?php  
        //This will give us the array of the key we used in the array
        foreach ($books as $book) : ?>
            <li>
                <!-- this will help to open the link of the book  -->
             <a href="<?= $book['purchaseUrl']; ?>"> 
                <?= $book['name']; ?>(<?= $book['author']; ?>)
                </a>
            </li>
        <?php
        endforeach;
        ?>






    </ul>


    <!-- <p>
         This is another way to print the single associated array 
        <?= $books[0]; ?>
    </p> -->


</body>

</html>