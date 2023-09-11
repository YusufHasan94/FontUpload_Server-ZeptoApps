<?php
    require ('connection.php');
    
    if ($_SERVER['REQUEST_METHOD'] === 'DELETE') {
        $groupName = $_GET['name'];
        echo $groupName;
        $query = mysqli_query($conn, "DELETE FROM group_store WHERE group_name='$groupName'");
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
