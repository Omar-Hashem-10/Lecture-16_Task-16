<?php
require_once 'UploadFile.php';

class UploadAudio extends UploadFile {
    public static function upload($file, $targetDirectory = "uploads/audio/") {
        $audioFileType = strtolower(pathinfo($file["name"], PATHINFO_EXTENSION));

        if ($audioFileType != "mp3" && $audioFileType != "wav" && $audioFileType != "aac") {
            echo "Sorry, only MP3, WAV, & AAC files are allowed.<br>";
            return;
        }

        parent::upload($file, $targetDirectory);
    }
}
?>
