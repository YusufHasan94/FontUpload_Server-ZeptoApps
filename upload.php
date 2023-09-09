<?php
    require ('connection.php');
    
    if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_FILES['file'])) {
        $fileName = $_FILES['file']['name'];
        $targetDir = 'uploads/';
        $targetFile = $targetDir . basename($_FILES['file']['name']);
        $fileSize = $_FILES['file']['size'];
        $fileType = $_FILES['file']['type'];
        
        if (move_uploaded_file($_FILES['file']['tmp_name'], $targetFile)) {
            echo 'File uploaded successfully.';
            echo $fileName;
            echo $targetFile;
            $query = mysqli_query($conn, "INSERT INTO font_table (font_name, font_size, font_path, file_type) VALUES ('$fileName', '$fileSize', '$targetFile', '$fileType')");
            if($query){
                echo "success to inserted";
            }
        } else {
            echo 'File upload failed.';
        }
    } else {
        echo 'Invalid request.';
    }
?>
