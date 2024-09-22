<form action="upload.php" method="POST" enctype="multipart/form-data">
    <label for="fileType">Choose file type:</label>
    <select name="fileType" id="fileType" required>
        <option value="">Select file type</option>
        <option value="image">Image</option>
        <option value="audio">Audio</option>
    </select><br><br>

    <label for="file">Choose file to upload:</label>
    <input type="file" name="file" id="file" required><br><br>

    <input type="submit" value="Upload File">
</form>
