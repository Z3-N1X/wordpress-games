<?php
function flappy_bird() {
    $htmlFile = fopen(dirname(dirname(__FILE__)).'/templates/flappyHtml.html',"r");
    $htmlFileContent = fgets($htmlFile);
    fclose($htmlFile);
    wp_enqueue_script("guessthenumber", "/wp-content/plugins/zenGamePlugin/assets/js/flappyBird.js");
    return $htmlFileContent;
}

add_shortcode("flappyBird", 'flappy_bird');
