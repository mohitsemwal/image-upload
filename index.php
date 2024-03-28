<?php
if(isset($_POST["submit"])){
  //  $img=$_POST["image"]; // not working right now
    $fileName = $_FILES["image"]["name"];
    $fileloc = $_FILES["image"]["tmp_name"];
    $fileDestination = "folder/".$fileName;

    $upload = move_uploaded_file($fileloc, $fileDestination);
    if(empty($upload)){
        echo "failed to upload image";
    }
    else{
        echo "Image uploaded successfuly";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>uloading Image</title>
</head>

<body>
    <div class="img">
        <form action="" method="post" enctype="multipart/form-data">
            <input type="file" name="image">
            <div>

                <input type="submit" name="submit">
            </div>
        </form>
    </div>
</body>

</html>
