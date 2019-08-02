<!doctype html>
<html>
<head>
	
	<style>
.error {color: #FF0000;}
</style>

</head>
<body>
	<form action="" method="POST">
	<table width="100%" border="1">
		<tr>
			<td width="30%" align="center">
				
				Picture
				 <input type="file" name="pic" accept="image/*"><br>

				Facebook Profile URL: <input type="text" name="fb"><br>

				LinkedIn Profile URL: <input type="text" name="linkedin"><br>

				GitHub Profile URL: <input type="text" name="github"><br>

		    </td>

			<td width="70%" align="left">

				<h1><i>Personal Information<i></h1>
					<table>
					<tr>
						<td>Name:</td>
						<td><input type="text" name="fname" maxlength="50" required></td>
					</tr>
					<tr>
						<td>Address:</td>
						<td><input type="text" name="address" maxlength="150" required></td>
					</tr>
					<tr>
						<td>Phone:</td>
						<td><input type="number" name="phone" maxlength="14" required></td>
				</tr>
				</table>

							<h1><i>Experiences<i></h1>
				<table>
				<tr>
					<td>  Job Name:</td>
					<td><input type="text" name="jobname" maxlength="50" ></td>
				</tr>
				<tr>
					<td>Current Job Description:</td>
					<td><input type="text" name="jobdesc" maxlength="600" ></td>
				</tr>
				<tr>
					<td>Another Recent Job Name:</td>
					<td><input type="text" name="rjobname" maxlength="50" ></td>
				</tr>
				<tr>
					<td>Description:</td>
					<td><input type="text" name="rjobdesc" maxlength="600" ></td>
				</tr>
			</table>


							<h1><i>Projects</h1>
				<table>
				<tr>
					<td>  Project Name:</td>
					<td><input type="text" name="projectname" maxlength="50" ></td>
				</tr>
				<tr>
					<td>Project  Description:</td>
					<td><input type="text" name="projectdesc" maxlength="600" ></td>
				</tr>
				<tr>
					<td>Recent Other Projet Name:</td>
					<td><input type="text" name="rprojectname" maxlength="14" ></td>
				</tr>
				<tr>
					<td>Description:</td>
					<td><input type="text" name="rprojectdesc" maxlength="600" ></td>
				</tr>
			</table>

								<h1><i>Educational Information</h1>

			<table>
				<tr>
					<th>School Name:</th>
					<td><input type="text" name="schoolname"></td>
				</tr>
				<tr>
					<td>SSC Result:</td>
					<td><input type="number" name="sscresult"></td>
				</tr>
				<tr>
					<th>College Name:</th>
					<td><input type="text" name="collegename"></td>
				</tr>
				<tr>
					<td>HSC Result:</td>
					<td><input type="number" name="hscresult"></td>
				</tr>
				<tr>
					<th>University/College Name:</th>
					<td><input type="text" name="varsityname"></td>
				</tr>
				<tr>
					<td>CGPA:</td>
					<td><input type="number" name="cgpa"></td>
				</tr>
			</table>

							<h1><i>Personal Information</h1>

			<table>
				<tr>
					<td>Father Name:</td>
					<td><input type="text" name="fathername"></td>
				</tr>
				<tr>
					<td>Mother Name:</td>
					<td><input type="text" name="mothername"></td>
				</tr>
				<tr>
					<td>Birth Day:</td>
					<td><input type="text" name="birthday"></td>
				</tr>
				<tr>
					<td>Blood Group:</td>
					<td><input type="text" name="bloodgroup"></td>
				</tr>
				<tr>
					<td>NID/Passport/Driving License Number:</td>
					<td><input type="text" name="nid"></td>
				</tr>
				<tr>
					<td>Maritial Status:</td>
					<td><input type="text" name="maritialstatus"></td>
				</tr>
				<tr>
					<td>Parmanent Address:</td>
					<td><input type="text" name="parmanentaddress"></td>
				</tr>
				<tr>
					<td>References:</td>
					<td><input type="text" name="references"></td>
				</tr>



			</table>



			<tr>
				<td align="center"><input type="submit" 	 value="SUBMIT"></td>
			</tr>
			


		</td>


		</tr>

	</table>
</form>
</body>
</html>


<?php
// Create connection
$conn = new mysqli("localhost", "root", "", "cvmake");


// Check connection
if ($conn) {
	echo "Connected successfully <br>";    
}

$fname = test_input($_POST["fname"]);
		$address  = test_input($_POST["address"]);
		$phone  = test_input($_POST["phone"]);
		$jobname   = test_input($_POST["jobname"]);
		$jobdesc   = test_input($_POST["jobdesc"]);
		$rjobname   = test_input($_POST["rjobname"]);
		$rjobdesc  = test_input($_POST["rjobdesc"]);
		$projectname  = test_input($_POST["projectname"]);
		$projectdesc  = test_input($_POST["projectdesc"]);
		$rprojectname  = test_input($_POST["rprojectname"]);
		$rprojectdesc  = test_input($_POST["rprojectdesc"]);
		$schoolname  = test_input($_POST["schoolname"]);
		$sscresult  = test_input($_POST["sscresult"]);
		$collegename  = test_input($_POST["collegename"]);
		$hscresult  = test_input($_POST["hscresult"]);
		$varsityname  = test_input($_POST["varsityname"]);
		$cgpa  = test_input($_POST["cgpa"]);
		$fathername   = test_input($_POST["fathername"]);
		$mothername  = test_input($_POST["mothername"]);
		$birthday  = test_input($_POST["birthday"]);
		$bloodgroup  = test_input($_POST["bloodgroup"]);
		$nid  = test_input($_POST["nid"]);
		$maritialstatus  = test_input($_POST["maritialstatus"]);
		$parmanentaddress  = test_input($_POST["parmanentaddress"]);
		$references  = test_input($_POST["references"]);
		$fb  = test_input($_POST["fb"]);
		$linkedin  = test_input($_POST["linkedin"]);
		$github  = test_input($_POST["github"]);
		$pic  = test_input($_POST["pic"]);
	//	$date =  date("H:i, jS F Y");


if ($_SERVER["REQUEST_METHOD"] == "POST") 
	{

	

$sql = "INSERT INTO  informtion (Name,Address,Phone,JobName,JobDesc,RecentJob,RecentJobDesc,ProjectName,ProjectDesc,RecentProjectName,RecentProjectDesc,SchoolName,sscresult,CollegeName,hscresult,VarsityName,cgpa,FatherName,MotherName,Birthday,BloodGroup,NID,MaritialStatus,ParmanentAddress,Reference,fburl,linkedinurl,githuburl,picture) VALUES('$fname','$address','$phone','$jobname','$jobdesc', '$rjobname' ,'$rjobdesc','$projectname','$projectdesc','$rprojectname','$rprojectdesc','$schoolname','$sscresult','$collegename','$hscresult','$varsityname','$cgpa','$fathername','$mothername','$birthday','$bloodgroup','$nid','$maritialstatus','$parmanentaddress','$references','$fb','$linkedin','$github','$pic')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully<br>";
}
else
	{
		echo "Lol !! <br> Not Saved at DB <br>";
	}

	echo "Your form submited at ";
    echo  date("H:i, jS F Y");
    echo "<br><br>";

    echo "Your Form is as follows: <br>";
    echo $pic."<br>";
    echo "Name: ".$fname.".<br>";
    echo "Address: ".$address.".<br>";
    echo "Phone: ".$phone.".<br>";



$sql = "SELECT Name,Address,Phone,picture FROM informtion";

$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "Name: " . $row["Name"]. " Address: " . $row["Address"]. " Phone: " . $row["Phone"]." Picture: " . $row["picture"]. "<br>";
    }
} else {
    echo "0 results";
}





}


function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;


}
?>