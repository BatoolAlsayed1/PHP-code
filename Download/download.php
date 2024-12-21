<?php
if ($_SERVER["REQUEST_METHOD"]=="GET" && isset($_GET['file'])){
// Set the uploads directory path
$uploadsDir = 'uploads/';

// Get the requested filename from GET parameter
$filename = isset($_GET['file']) ? basename($_GET['file']) : '';
$filepath = $uploadsDir . $filename;

// Basic security checks
if (empty($filename) || !file_exists($filepath) || !is_file($filepath) || strpos(realpath($filepath), realpath($uploadsDir)) !== 0) {
    header("HTTP/1.0 404 Not Found");
    die('File not found or access denied');
}

// Get the file mime type
$finfo = finfo_open(FILEINFO_MIME_TYPE);
$mimeType = finfo_file($finfo, $filepath);
finfo_close($finfo);

// Set headers for download
header('Content-Type: ' . $mimeType);
header('Content-Disposition: attachment; filename="' . $filename . '"');
header('Content-Length: ' . filesize($filepath));
header('Cache-Control: no-cache');

// Output file content
readfile($filepath);
exit;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>File Downloader</title>
</head>
<body>
    <h1>Download File</h1>
    <!-- Form for file input -->
    <form action="download.php" method="GET">
        <label for="file">Enter filename to download:</label>
        <input type="text" id="file" name="file" placeholder="example1.txt" required>
        <button type="submit">Download</button>
    </form>

    <h2>Or select a file:</h2>
    <!-- Links to download specific files -->
    <ul>
        <li><a href="download.php?file=example1.txt">Download example1.txt</a></li>
        <li><a href="download.php?file=example2.pdf">Download example2.pdf</a></li>
    </ul>
</body>
</html>