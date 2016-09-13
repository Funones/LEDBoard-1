<?php

include 'LEDBoard/ledLetters.php';


function LED(){
    
    drawLetter("#","blue");
    drawLetter("B","blue");
}


?>


<!DOCTYPE html>
<html>
    <head>
        <title> Tim Perry: Lab 2 - LED Board </title>
    </head>
    <body>
        
        <h1> LED Board </h1>

        <?=LED("hello")?>

    </body>
</html>