<?php
$bad_word = $_GET['badword'];
$text = $_GET['text'];


$censured_text = str_replace($bad_word, '***' , $text);

$original_length = strlen($text);
$filtredtext_length = strlen($censured_text);


?>





<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bad Words</title>
</head>
<body>
    <div>
        <div>
            <h1>Testo non censurato:</h1>
            <p><?=$text ?></p>
            <h4>Lunghezza testo: <span><?= $original_length?> </span> </h4>
        </div>
        <div>
            <h1>Testo censurato:</h1>
            <p><?=$censured_text ?></p>
            <h4>Lunghezza testo: <span><?= $filtredtext_length?> </span> </h4>
        </div>
    </div>
</body>
</html>