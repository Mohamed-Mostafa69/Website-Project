<?php
if (isset($_POST['submit'])) {
    $file = $_FILES['file'];

    $fileName = $_FILES['file']['name'];
    $fileTmpName = $_FILES['file']['tmp_name'];
    $fileSize = $_FILES['file']['size'];
    $fileError = $_FILES['file']['error'];
    $fileType = $_FILES['file']['type'];

    $fileExt = explode('.' , $fileName);
    $fileActualExt = strtolower(end($fileExt));

    $allowed = array('docx', 'xlsx', 'txt', 'pptx', 'zip', 'rar', 'pdf');

    if (in_array($fileActualExt , $allowed)) {
        if ($fileError === 0) {
            if ($fileSize < 1000000) {
                $fileDestination = 'uploads/'.$fileName;
                move_uploaded_file($fileTmpName, $fileDestination);
                header("Location: index.php?Uploadsuccess");
            } else {
                echo "You File Is Too Big";
            }
        } else {
            echo "There was An Error Uploading Your File!";
        }
    } else {
        echo "You Cannot Upload Files Of This Type!";
    }
}
?>