<?php
// Variable Scope / lingkup variable
$x = 10;

function tampilx() {
    // menggunakan variable global diluar variable function, mencari variable yang kita tulis
    global $x;
    echo $x;
}

tampilx();


?>