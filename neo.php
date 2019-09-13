<?php
    include_once 'classes.php';
    $neo = file_get_contents('serialize.txt');
    $neo = unserialize($neo);
    echo $neo;
?>