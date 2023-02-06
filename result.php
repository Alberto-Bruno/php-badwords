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
    <title>Bad Words</title>
</head>
<body>
    <div>
        <div>
            <h1>Paragrafo originale:</h1>
            <p><?php echo $text ?></p>
            <h4>Lunghezza testo: <span><?= $original_length?> </span> </h4>
        </div>
        <div>
            <h1>Paragrafo censurato:</h1>
            <p><?php echo $censured_text ?></p>
            <h4>Lunghezza testo: <span><?= $filtredtext_length?> </span> </h4>
        </div>
    </div>
</body>
</html>