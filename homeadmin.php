<!DOCTYPE html>
<html>
<head>
	<title>Home Admin</title>
</head>
<body>
<div class="row" style="margin-left:180px; margin-right:130px;">

  <div class="col-lg-6">
  <h2 align="center"><b>Home Page Control:</h2>
<h3><u>Home Profile Image Upload: </u></h3>
<form action="homeimage.php" method="post" enctype="multipart/form-data">

   <b> Select image to upload: <br><br> </b> <input type="file" name="homefile"><br>
    Image Title: <input type="text" name="imgname" placeholder="Short Title"><br> <br>
    Image Details: <textarea name="imagedetails" rows="3" cols="50" placeholder="Write your Image Details."></textarea><br> <br>
    <input type="submit" value="Upload Image" name="submit"><br><br>
</form>

  
</div>
<div class="col-lg-6">
  
</div>
</div>
</body>
</html>
