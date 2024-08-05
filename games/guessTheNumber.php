<?php
function guess_the_number() {
    $correctNumber = rand(1,3);
    $htmlFile = fopen(dirname(dirname(__FILE__)).'/templates/index.html',"r");
    $htmlFileContent = fgets($htmlFile);
    fclose($htmlFile);
    wp_enqueue_script("guessthenumber", plugins_url('/assets/js/guessTheNumber.js',__FILE__));
    return str_replace('$guessedNumber',$correctNumber,$htmlFileContent);
}

add_shortcode("numberGuess", 'guess_the_number');
