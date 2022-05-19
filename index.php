<?php
//  Creare una variabile con un paragrafo di testo a vostra scelta.
//  Stampare a schermo il paragrafo e la sua lunghezza.
//  Una parola da censurare viene passata dall'utente tramite parametro GET.
//  Stampare di nuovo il paragrafo e la sua lunghezza, dopo aver sostituito con tre asterischi (***) tutte le occorrenze della parola da censurare.


// paragrafo iniziale
$text = 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Impedit, quidem! Lorem consectetur adipisicing elit.';
var_dump($text);
var_dump('La lunghezza del paragrafo iniziale è ' . strlen($text));

// paragrafo finale
$censuredWord = $_GET['word'];
var_dump($censuredWord);
$censuredText = str_replace($censuredWord, '***', $text);
var_dump($censuredText);
var_dump('La lunghezza del paragrafo finale è ' . strlen($censuredWord));

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Bad word</title>
</head>
<body>
    
    <h1>PHP Bad word</h1><hr>

    <h2>Testo iniziale</h2>
    <p><i>Testo iniziale:</i> <?=$text;?></p>
    <p><i>Lunghezza testo iniziale:</i> <b><?=strlen($text)?></b></p><hr>

    <h2>Testo censurato</h2>
    <p><i>Testo censurato:</i> <?=$censuredText;?></p>
    <p><i>Lughezza testo censurato:</i> <b><?=strlen($censuredText);?></b></p><hr>
    
</body>
</html>