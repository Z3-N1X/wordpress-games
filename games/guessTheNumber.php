<?php
function guess_the_number() {
    $correctNumber = rand(1,3);
    $htmlFile = fopen(dirname(dirname(__FILE__)).'/templates/index.html',"r");
    $htmlFileContent = fgets($htmlFile);
    fclose($htmlFile);
    return str_replace($htmlFileContent,'$guessedNumber',$correctNumber);
}


add_shortcode("numberGuess", 'guess_the_number');
