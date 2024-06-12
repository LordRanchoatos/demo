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
                "author" => "Philip K Dick",
                "purchaseUrl" => "wwww.example.com/1"
            ],
            [
                "name" => "The Langoliers",
                "author" => "Philip K Dick",
                "purchaseUrl" => "wwww.example.com/2"
            ],
            [
                "name" => "Hail Mary",
                "author" => "Philip K Dick",
                "purchaseUrl" => "wwww.example.com/3"
            ]
        ];
    ?>

    <ul>
        <?php foreach ($books as $book) : ?>
            <li>
                <a href="<?= $book["purchaseUrl"] ?> " ><?= $book['name'] ?></a>
            </li>
            <?php endforeach ?>
    </ul>
</body>
</html>