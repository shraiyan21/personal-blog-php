
<?php
$target_dir = "homeimage/";

$target_file = $target_dir . basename($_FILES["homefile"]["name"]);

$file_name = basename($_FILES["homefile"]["name"]);

$uploadOk = 1;

$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

/*// Check if image file is a actual image or fake image

if(isset($_POST["submit"])) {
    $check = getimagesize($_FILES["homefile"]["tmp_name"]);
    if($check !== false) {
        echo "File is an image - " . $check["mime"] . ".";
        $uploadOk = 1;
    } else {
        echo "File is not an image.";
        $uploadOk = 0;
    }
}

// Check if file already exists
if (file_exists($target_file)) {
    echo "Sorry, file already exists.";
    $uploadOk = 0;
}


// Check file size
if ($_FILES["homefile"]["size"] > 5000000) {
    echo "Sorry, your file is too large.";
    $uploadOk = 0;
}


// Allow certain file formats
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
&& $imageFileType != "gif" ) {
    echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
    $uploadOk = 0;
}


// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
    echo "Sorry, your file was not uploaded.";*/
// if everything is ok, try to upload file
//} else {
    if (move_uploaded_file($_FILES["homefile"]["tmp_name"], $target_file)) {

        echo "The file ". basename( $_FILES["homefile"]["name"]). " has been uploaded.";
    } else {
        echo "Sorry, there was an error uploading your file.";
    }
//}


if(isset($_POST["submit"])){

$imgname = $_POST["imgname"];
$imagedetails = $_POST["imagedetails"];

$DBconnect = mysqli_connect("localhost","root","","blog");
if($DBconnect)


{echo "<h1>DB CONNECTED</h1><br>";}

$sql = mysqli_query($DBconnect,"INSERT INTO homeimage(homeimage,homeimagetitle,homeimagedescription) VALUES('$target_file','$imgname','$imagedetails')");

if($sql)
{
  echo "Image in DB";
}

}



?>
<!DOCTYPE html>
<html>
<head>
  <title>Pic Upload</title>
</head>
<body>
   <a  href="homeadmin.php"><br><br>Go Back to Admin Page</a>

</body>
</html>

