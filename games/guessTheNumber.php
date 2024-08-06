<?php
function guess_the_number() {
    $correctNumber = rand(1,3);
    $htmlFile = fopen(dirname(dirname(__FILE__)).'/templates/index.html',"r");
    $htmlFileContent = fgets($htmlFile);
    fclose($htmlFile);
    wp_enqueue_script("guessthenumber", 'wp-content/plugins/gamePluginZ3N/assets/js/guessTheNumber.js');
    return str_replace('$guessedNumber',$correctNumber,$htmlFileContent);
}

add_shortcode("numberGuess", 'guess_the_number');
