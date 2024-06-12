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
            "Do Android Dream of Electric Sheep",
            "The Langoliers",
            "Hail Mary"
        ];
    ?>

    <p>
        <?= $books[1] ?>
    </p>
</body>
</html>