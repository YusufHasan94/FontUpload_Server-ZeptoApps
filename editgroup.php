<?php
    header("Access-Control-Allow-Origin: *");
    header("Access-Control-Allow-Methods: *");
    header("Access-Control-Allow-Headers: *");
    
    $conn = mysqli_connect("localhost", "root", "", "font_store");
    $sqlFile = file_get_contents("font_store.sql");
    $conn-> multi_query($sqlFile);
    
    if ($_SERVER['REQUEST_METHOD'] === 'GET') {
        $group = $_GET['group'];
        $query = mysqli_query($conn, "SELECT * FROM group_store WHERE group_name='$group' ");
        while($row = mysqli_fetch_array($query)){
            $output[] = $row; 
        }
        echo json_encode($output);
    } else {
        echo 'Invalid request.';
    }
?>
