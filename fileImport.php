<?php

// Importing all files for our project


function importAllFiles() {
    $pluginDir = dirname(__FILE__);
    require_once( $pluginDir."/games/guessTheNumber.php");
}

importAllFiles();