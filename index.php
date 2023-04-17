<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Php Bad Words</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <form action="/php-badwords/badwords.php" method="GET">
    <div>
        <label for="phrase">Frase:</label>
        <input type="text" name="phrase" id="phrase" placeholder="Inserisci una frase"/>
    </div>
    <div>
        <label for="badword">Parola da censurare:</label>
        <input type="text" name="badword" id="badword" placeholder="Inserisci una parola da censurare"/>
    </div>
        <button type="submit">Invia</button>
    </form>
</body>
</html>