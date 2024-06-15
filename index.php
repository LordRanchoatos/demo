<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>demo</title>
    <style>
        /* body {
            display: grid;
            place-items: center;
            height: 100vh;
            margins: 0;
            padding: 0;
            font-family: sans-serif;
        } */
    </style>
</head>
<body>
    <h1>
        Recommended Books
    </h1>
    <?php 
        $books = [
            [
               "name" => "Do Android Dream of Electric Sheep",
               "releaseYear" => "2007",
                "author" => "Philip K Dick",
                "purchaseUrl" => "wwww.example.com/1"
            ],
            [
                "name" => "The Langoliers",
                "releaseYear" => "2021",
                "author" => "Andy Weir",
                "purchaseUrl" => "wwww.example.com/2"
            ],
            [
                "name" => "Hail Mary",
                "releaseYear" => "2011",
                "author" => "Andy Weir",
                "purchaseUrl" => "wwww.example.com/3"
            ]
        ];

        function filter ($items, $key, $value) {
            $filteredItems = [];

            foreach ($items as $item) {
                if ($item[$key] === $value){
                    $filteredItems[] = $item;
                }
            }

            return $filteredItems;
        };

        $filteredBooks = filter($books, 'releaseYear', '2007');
    ?>

    <ul>
        <?php foreach ($filteredBooks as $book) : ?>
                <li>
                    <a href="<?= $book["purchaseUrl"] ?> " ><?= $book['name']; ?> (<?= $book['releaseYear'] ?>) -By <?= $book['author'] ?></a>
                </li>
            <?php endforeach ?>
    </ul>
</body>
</html>