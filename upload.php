
<?php

$conn = mysqli_connect('localhost', 'root', '', 'practice');



if (isset($_POST['save1'])) { 

     $sql = "SELECT *
       FROM files";
     $result = mysqli_query($conn, $sql);

     $files = mysqli_fetch_all($result, MYSQLI_ASSOC);



    $filename = $_FILES['myfile']['name'];

    
    $destination = 'uploads/' . $filename;

    
    $extension = pathinfo($filename, PATHINFO_EXTENSION);
    $topic = mysqli_real_escape_string($conn, $_POST['topic']);

    
    $file = $_FILES['myfile']['tmp_name'];
    $size = $_FILES['myfile']['size'];

    if (!in_array($extension, ['zip', 'pdf', 'docx'])) {
        echo "You file extension must be .zip, .pdf or .docx";
    } elseif ($_FILES['myfile']['size'] > 1000000000) { 
        echo "File too large!";
    } else {
        
        if (move_uploaded_file($file, $destination)) {
            $sql = "INSERT INTO files (name, topic, size, downloads, username) VALUES ('$filename', '$topic', '$size', 0, '$usern')";
            if (mysqli_query($conn, $sql)) {
                echo "File uploaded successfully";
            }
        } else {
            echo "Failed to upload file.";
        }
    }
}

if (isset($_POST['save2'])) { 


    $sql = "SELECT *
       FROM material";
     $result = mysqli_query($conn, $sql);

     $files = mysqli_fetch_all($result, MYSQLI_ASSOC);


    $filename = $_FILES['myfile']['name'];

    
    $destination = 'uploads/' . $filename;

    
    $extension = pathinfo($filename, PATHINFO_EXTENSION);
    $code = mysqli_real_escape_string($conn, $_POST['code']);
    
    
    $file = $_FILES['myfile']['tmp_name'];
    $size = $_FILES['myfile']['size'];

    if (!in_array($extension, ['zip', 'pdf', 'docx', 'pptx'])) {
        echo "You file extension must be .zip, .pdf, .docx or .pptx";
    } elseif ($_FILES['myfile']['size'] > 1000000000) { 
        echo "File too large!";
    } else {
        
        if (move_uploaded_file($file, $destination)) {
            $sql = "INSERT INTO material (name, size, downloads, username, code) VALUES ('$filename', '$size', 0, '$usern', '$code')";
            if (mysqli_query($conn, $sql)) {
                echo "File uploaded successfully";
            }
        } else {
            echo "Failed to upload file.";
        }
    }
}



?>



<?php

// Downloads files


if (isset($_GET['file_id'])) {
    $id = $_GET['file_id'];

    // fetch file to download from database
    $sql = "SELECT * FROM files WHERE id=$id";
    $result = mysqli_query($conn, $sql);

    $file = mysqli_fetch_assoc($result);
    $filepath = 'uploads/' . $file['name'];

    if (file_exists($filepath)) {
        header('Content-Description: File Transfer');
        header('Content-Type: application/octet-stream');
        header('Content-Disposition: attachment; filename=' . basename($filepath));
        header('Expires: 0');
        header('Cache-Control: must-revalidate');
        header('Pragma: public');
        header('Content-Length: ' . filesize('uploads/' . $file['name']));
        readfile('uploads/' . $file['name']);

        // Now update downloads count
        $newCount = $file['downloads'] + 1;
        $updateQuery = "UPDATE files SET downloads=$newCount WHERE id=$id";
        mysqli_query($conn, $updateQuery);
        exit;
    }

}

?>




