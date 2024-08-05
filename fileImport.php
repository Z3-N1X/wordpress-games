<?php

// Importing all files for our project


function importAllFiles() 
{
    $pluginDir = dirname(__FILE__);
    require_once( $pluginDir."/games/guessTheNumber.php");
}


function importingAllStyles() 
{
    wp_enqueue_style("guessthenumber", plugins_url('/assets/css/guessTheNumber.css',__FILE__));
}

function importingAllScripts() 
{
    wp_enqueue_script("guessthenumber", plugins_url('/assets/js/guessTheNumber.css',__FILE__));
}

function onScriptImport()
{
    importingAllStyles();
    importingAllScripts();
}

importAllFiles();
add_action('wp_enqueue_scripts','onScriptImport');