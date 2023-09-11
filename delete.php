<?php
    require ('connection.php');
    
    if ($_SERVER['REQUEST_METHOD'] === 'DELETE') {
        $fileIdInString = $_GET['id'];
        $fileId = (int)$fileIdInString;
        if(is_string($fileId)) echo "string";
        else echo "not string";
        $query = mysqli_query($conn, "DELETE FROM font_table WHERE id=$fileId");
        if($query){
            echo "deleted";
        }
        else{
            echo "not deleted";
        }
        echo "connected";
    } else {
        echo 'Invalid request.';
    }
?>
