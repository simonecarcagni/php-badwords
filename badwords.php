<?php

$phrase = $_GET['phrase'];

$badword = $_GET['badword'];

$newPhrase = str_ireplace($badword , '***' , $phrase);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Frase Censurata</title>
</head>
<body>
    <h1><?php echo $phrase?></h1>
    <p>La lunghezza di questa frase è: <?php echo strlen($phrase)?></p>
    <h1><?php echo $newPhrase?></h1>
    <p>La lunghezza di questa frase è: <?php echo strlen($newPhrase)?></p>
</body>
</html>