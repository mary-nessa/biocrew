<?php
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_FILES["projectFile"])) {
    $uploadDir = "uploads/"; // Specify the directory where you want to store the uploaded files
    $uploadFile = $uploadDir . basename($_FILES["projectFile"]["name"]);

    // Check if the file is valid and move it to the upload directory
    if (move_uploaded_file($_FILES["projectFile"]["tmp_name"], $uploadFile)) {
        echo "File is valid and was successfully uploaded.";
    } else {
        echo "Upload failed.";
    }
} else {
    echo "Invalid request or no file uploaded.";
}
?>
