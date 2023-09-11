<?php
    header("Access-Control-Allow-Origin: *");
    header("Access-Control-Allow-Methods: GET, POST, PUT, DELETE, OPTIONS");
    header("Access-Control-Allow-Headers: Content-Type");
    $conn = mysqli_connect("localhost", "root", "", "font_store");
    // if($conn){
    //     echo "success to connect";
    // }else{
    //     echo "failed to connect";
    // }
?>