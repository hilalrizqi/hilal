<?php
try {
    $kon = new PDO("mysql:host=localhost;dbname=db_handphone","root","");
}
catch (konExcecption $e) {
    echo $e->getMessage();
}
?>
