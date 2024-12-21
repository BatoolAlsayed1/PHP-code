<?php
if ($_SERVER["REQUEST_METHOD"]== "POST"){
    // Define Constant
    $target_dir= "uploads/";
    $allowed_types= ['image/jpeg','image/png','image/gif'];
    $max_size= 5 * 1024 * 1024; // 5MB

    // Validate file existance
    if(!isset($_FILES['fileToUpload']) || $_FILES['fileToUpload']['error']=== UPLOAD_ERR_NO_FILE)
        exit("Error: No files was uploaded. ");

    // Validate file type
    $fileType=$_FILES['fileToUpload']['type'];
    if (!in_array($fileType, $allowed_types))
        exit("Error: Only JPG, PNG, and GIF files are allowed.");
    
    // Check file size
    if($_FILES['fileToUpload']['size'] > $max_size)
        exit("Error: File size cannot exceed 5 MB");

    //Sanitize filename
    $original_filename= htmlspecialchars(basename($_FILES["fileToUpload"]["name"]), ENT_QUOTES, 'UTF-8');
    $file_ext= strtolower(pathinfo($original_filename, PATHINFO_EXTENSION));

    // generate unique name and check if already exists
    do{
        $unique_name= uniqid() . '.' . $file_ext;
        $target_file= $target_dir . $unique_name;
    } while (file_exists($target_file));

    // Attept to upload file
    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)){
        echo "The file " . basename( $_FILES["fileToUpload"]['name']) . "has been uploaded.";
    }else{
        echo "Sorry, there was an error uploading your file.";
    }
}else {
    echo "No file upload attemp detected";
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Image Upload Example</title>
</head>
<body>
    <h2>Upload an Image</h2>
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post" enctype="multipart/form-data">
    Select image to upload:
    <input type="file" name="fileToUpload" id="fileToUpload">
    <input type="submit" value="Upload Image" name="submit">
    </form>
</body>
</html>