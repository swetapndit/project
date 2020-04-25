<?php
$servername="localhost";
$username="root" ;
$password="";
$dbname="first_project";
$successmessage='';
$conn=mysqli_connect($servername,$username,$password,$dbname);
if(!$conn)
{
	die("connection failed:".mysqli_connect_error());
}
if($_SERVER['REQUEST_METHOD'] == 'POST')
{
	$fname=$_POST['fname'];
	$lname=$_POST['lname'];
	$roll=$_POST['roll'];
	$clg=$_POST['clg'];
	$gender=$_POST['gender'];
	$query = "INSERT INTO student_details (fname, lname, roll, clg, gender) VALUES ('$fname', '$lname', $roll, '$clg', '$gender')";
	if(mysqli_query($conn, $query)){
		$successmessage ="Record Insertd Successfully!!!";
	}else{
		$successmessage = "Error: " . $sql . "<br>" . mysqli_error($conn);
	}

	// print_r($_POST);exit;
}


echo $successmessage;
 ?>


<form method="POST">
  <label for="fname">First name:</label><br>
  <input type="text" id="fname" name="fname"><br>
  <label for="lname">Last name:</label><br>
  <input type="text" id="lname" name="lname"><br>
  <label for="roll">roll</label><br>
  <input type="number" id="roll" name="roll"><br>
  <label for="clg">clg</label><br>
 <select id="clg" name="clg">
  <option value="BC clg">BC clg</option>
  <option value="BB clg">BB clg</option>
  <option value="DLP clg">DLP clg</option>
</select>
  

<label for="gender">gender</label><br>
  <input type="radio" id="male" name="gender" value="male">
  <label for="male">Male</label><br>
  <input type="radio" id="female" name="gender" value="female">
  <label for="female">Female</label><br>
  <input type="radio" id="other" name="gender" value="other">
  <label for="other">Other</label>
<input type="submit" id="submit" name="submit" value="Submit Form">

</form>


