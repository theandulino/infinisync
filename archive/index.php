<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_FILES['file'])) {
    $upload_dir = '/raid/';
    $filename = basename($_FILES['file']['name']);

    // Optional: sanitize filename
    $filename = preg_replace("/[^a-zA-Z0-9-_\.]/", "_", $filename);

    $target = $upload_dir . $filename;

    if (move_uploaded_file($_FILES['file']['tmp_name'], $target)) {
        echo "✅ File uploaded to /raid successfully.";
    } else {
        echo "❌ Upload failed.";
    }
}
?>
<!DOCTYPE html>
<html>
<head><title>Upload to Archive</title></head>
<body>
    <h1>Upload Archive File</h1>
    <form action="" method="post" enctype="multipart/form-data">
        Select file: <input type="file" name="file" required />
        <input type="submit" value="Upload" />
    </form>
</body>
</html>
