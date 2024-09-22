<?php
require_once 'UploadImage.php';
require_once 'UploadAudio.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_FILES["file"]) && isset($_POST["fileType"])) {
        $fileType = $_POST["fileType"];

        if ($fileType == "image") {
            UploadImage::upload($_FILES["file"]);
        }
        elseif ($fileType == "audio") {
            UploadAudio::upload($_FILES["file"]);
        }
        else {
            echo "Invalid file type selected.<br>";
        }
    } else {
        echo "No file or file type selected.<br>";
    }
}
?>
