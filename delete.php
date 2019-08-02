<?php
	 $DBconnect = mysqli_connect("localhost","root","","blog");
       if($DBconnect)
         {echo "<h1>DB CONNECTED</h1><br>";}
     	else
     		{echo "DB Not CONNECTED";}


     	// if press the button delete

	if(isset($_POST["delete"]))
	{
		// store the image file name & id that want to delete 

     	$filedeletetitle = $_POST["imgtitle"];
     	$filedeleteid = $_POST["imgid"];
		
		echo "<br>".$filedeleteid." :  ".$filedeletetitle."<br>";
		// query for delete some data from DB 

			$sql = "DELETE FROM image WHERE id = '$filedeleteid' ";

			$sql1 = "SELECT * FROM image WHERE id = '$filedeleteid' ";

			$result = $DBconnect->query($sql1);

			if ($result->num_rows > 0) {
          // output data of each row
        while($row = $result->fetch_assoc()) {

        	$img = $row["img"];
        	$title = $row["imgname"];

        	echo $img;

        	if (!unlink($img))
			  {
				  echo ("<br>Error deleting $title<br>");
  			  }
			else
			  {
				  echo ("<br>Deleted $title<br>");
			  }

		    }
		  }
 

			if (mysqli_query($DBconnect, $sql)) {
			    echo "<br>Record deleted successfully<br>";
			} else {
			    echo "<br>Error deleting record: <br>" . $conn->error;
			}
	
	}

	$DBconnect->close();

?>

<!DOCTYPE html>
<html>
<head>
	<title>Delete</title>
</head>
<body>
	<h3><a href="admin.php">Go Back To <b>ADMIN PAGE</b></a></h3>
</body>
</html>