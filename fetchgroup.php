<?php
    header("Access-Control-Allow-Origin: *");
    header("Access-Control-Allow-Methods: *");
    header("Access-Control-Allow-Headers: *");
    
    $conn = mysqli_connect("localhost", "root", "", "font_store");
    $sqlFile = file_get_contents("font_store.sql");
    $conn-> multi_query($sqlFile);

    if($_SERVER["REQUEST_METHOD"] == 'GET'){
        $query = mysqli_query($conn, "SELECT group_name, GROUP_CONCAT(all_fonts SEPARATOR ', ') AS concatenated_fonts
            FROM group_store
            GROUP BY group_name
            HAVING COUNT(*) > 1;");
        while($row = mysqli_fetch_assoc($query)){
            $output[] = $row; 
        }
        echo json_encode($output);
    }
?>