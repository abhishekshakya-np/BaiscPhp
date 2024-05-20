<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>As part of our first code refactor, we'll discuss what lambda functions are, as well as when and why you might reach for them.</title>
</head>

<body>
    <?php
        $books = [
            [
                'name' => 'Do Androids Dream of Electric Sheep',
                'author' => 'Philip K. Dick',
                'releaseYear' => 1968,
                'purchaseUrl' => 'http://example.com'
            ],
            [
                'name' => 'Project Hail Mary',
                'author' => 'Andy Weir',
                'releaseYear' => 2021,
                'purchaseUrl' => 'http://example.com'
            ],
            [
                'name' => 'The Martian',
                'author' => 'Andy Weir',
                'releaseYear' => 2011,
                'purchaseUrl' => 'http://example.com'
            ],
        ];
        // The array_filter() function is used to filter the $books array based on the condition that the author is 'Andy Weir'. 
        $filteredBooks = array_filter($books, function ($book) {
            return $book['author'] === 'Andy Weir';
        });
    ?>

    <ul>
        <?php foreach ($filteredBooks as $book) : ?>
            <li>
                <a href="<?= $book['purchaseUrl'] ?>">
                    <?= $book['name']; ?> (<?= $book['releaseYear'] ?>) - By <?= $book['author'] ?>
                </a>
            </li>
        <?php endforeach; ?>
    </ul>
</body>
</html>