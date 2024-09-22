<?php
class UploadFile {
    public static function upload($file, $targetDirectory) {
        $targetFile = $targetDirectory . basename($file["name"]);
        $uploadOk = 1;

        if ($file["size"] > 5000000) { 
            echo "Sorry, your file is too large.<br>";
            $uploadOk = 0;
        }

        if ($uploadOk == 1) {
            if (move_uploaded_file($file["tmp_name"], $targetFile)) {
                echo "The file " . basename($file["name"]) . " has been uploaded to " . $targetDirectory . "<br>";
            } else {
                echo "Sorry, there was an error uploading your file.<br>";
            }
        }
    }
}
?>
