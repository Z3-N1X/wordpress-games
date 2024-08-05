<?php
function guess_the_number() {
    $correctNumber = rand(1,3);
    $htmlFileContent = fgets(fopen("templates\index.html","r"));
    return $htmlFileContent;
}

add_shortcode("numberGuess", 'guess_the_number');
