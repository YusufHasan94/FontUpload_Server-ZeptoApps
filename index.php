<?php
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Methods: *");
header("Access-Control-Allow-Headers: *");

$conn = mysqli_connect("localhost", "root", "", "font_store");
$method = $_SERVER["REQUEST_METHOD"];

if($method == 'GET'){
    $query = mysqli_query($conn, "SELECT * FROM font_table");
    while($row = mysqli_fetch_assoc($query)){
        $output[] = $row; 
    }
    echo json_encode($output);
}
?>
