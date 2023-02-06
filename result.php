<?php
$text = $_GET['text'];
$paragraph = $_GET['paragraph'];

$censured_text = str_replace($paragraph, '***' , $text);
$original_length = strlen($text);
$filtredtext_length = strlen($censured_text);


?>





<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <title>Bad Words</title>
</head>
<body>
    <div class='container text-center d-flex my-5'>
        <div class='border w-50 mx-3 p-2'>
            <h2>Paragrafo originale</h2>
            <p><?php echo $text ?></p>
            <h4>Lunghezza testo: <span><?= $original_length?> </span> </h4>
        </div>
        <div class='border w-50 mx-3 p-2'>
            <h2>Paragrafo censurato</h2>
            <p><?php echo $censured_text ?></p>
            <h4>Lunghezza testo: <span><?= $filtredtext_length?> </span> </h4>
        </div>
    </div>
</body>
</html>