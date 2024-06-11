<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>demo</title>
    <style>
        body {
            display: grid;
            place-items: center;
            height: 100vh;
            margins: 0;
            padding: 0;
            font-family: sans-serif;
        }
    </style>
</head>
<body>
    <?php
    $name = "Dark matter";
    $read = false;
    if ($read){
        $message = "You have read $name";
    } else {
        $message = "You not have read $name";
    }
    
    
    ?>
    <h1>
        <?php 

            echo $message;
        ?>
    </h1>
</body>
</html>