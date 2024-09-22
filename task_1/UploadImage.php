<?php
require_once 'UploadFile.php';

class UploadImage extends UploadFile {
    public static function upload($file, $targetDirectory = "uploads/images/") {
        $imageFileType = strtolower(pathinfo($file["name"], PATHINFO_EXTENSION));

        $check = getimagesize($file["tmp_name"]);
        if ($check === false) {
            echo "File is not an image.<br>";
            return;
        }

        if ($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg" && $imageFileType != "gif") {
            echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.<br>";
            return;
        }

        parent::upload($file, $targetDirectory);
    }
}
?>
