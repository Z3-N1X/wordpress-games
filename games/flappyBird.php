<?php
function flappy_bird() {
    $htmlFile = fopen(dirname(dirname(__FILE__)).'/templates/flappyHtml.html',"r");
    $htmlFileContent = fgets($htmlFile);
    fclose($htmlFile);
    wp_enqueue_script("flappybird", dirname(dirname(__FILE__))."/assets/js/flappyBird.js");
    wp_enqueue_style("flappybird", dirname(dirname(__FILE__))."/assets/css/flappyBirdStyle.css");
    return $htmlFileContent;
}

add_shortcode("flappyBird", 'flappy_bird');
