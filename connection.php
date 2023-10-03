<?php
    header("Access-Control-Allow-Origin: *");
    header("Access-Control-Allow-Methods: GET, POST, PUT, DELETE, OPTIONS");
    header("Access-Control-Allow-Headers: Content-Type");
    $conn = mysqli_connect("localhost", "root", "", "font_store");
    $sqlFile = file_get_contents("font_store.sql");
    $conn-> multi_query($sqlFile);
?>