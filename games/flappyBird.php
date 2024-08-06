<?php
function flappy_bird() {
    $htmlFile = fopen(dirname(dirname(__FILE__)).'/templates/flappyHtml.html',"r");
    $htmlFileContent = fgets($htmlFile);
    fclose($htmlFile);
    wp_enqueue_script("flappybird", 'wp-content/plugins/gamePluginZ3N/assets/js/flappyBird.js');
    wp_enqueue_style("flappybird", 'wp-content/plugins/gamePluginZ3N/assets/css/flappyBirdStyle.css');
    return $htmlFileContent;
}

add_shortcode("flappyBird", 'flappy_bird');
