<?php
    require ('connection.php');
    
    if ($_SERVER['REQUEST_METHOD'] === 'POST' ) {
        echo "connection ok";
        $json_data = file_get_contents("php://input");
        $data = json_decode($json_data, true);
        if($data == null){
            echo json_encode(["message"=> "invalid json data"]);
        }
        $name = $data['name'];
        $groupMember = json_encode($data["groupMember"]); 

        echo $name; 
        echo $groupMember;

        $query = mysqli_query($conn, "INSERT INTO group_store(group_name, all_fonts) VALUES ('$name', '$groupMember')");
        if($query) {
            echo "success to insert into db";
        }
        else{
            echo "failed to insert into db";
        }
        
    } else {
        echo 'Invalid request';
    }
?>
