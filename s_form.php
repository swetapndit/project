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
?>
<!DOCTYPE html>
<html>
<head>
	<title>Sweta Form</title>
	<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
</head>
<body>
<div class="container">
	<h4>Personal Information</h4>
	<hr>
	<div class="form-group row">
		<div class="col-sm-12">
			<label>Registration For <span class="text-danger">*</span> </label>
			<div class="option">
				<input type="radio" name="">
				<label>Self</label>&nbsp;&nbsp;
				<input type="radio" name="">
				<label>Other</label>&nbsp;&nbsp;
			</div>
		</div>
	</div>
	<div class="form-group row">
		<div class="col-sm-6">
			<label>Category Name : </label>
			<select class="form-control">
				<option value="">--Select--</option>
				<option value="1">Testing 1</option>
				<option value="1">Testing 2</option>
			</select>
		</div>
	</div>
	<div class="form-group row">
		<div class="col-sm-6">
			<label>Traveler's Name</label>
			<input type="text" name="" class="form-control">
		</div>
		<div class="col-sm-6">
			<label>Age</label>
			<input type="number" name="" class="form-control">
		</div>
	</div>
	<div class="form-group row">
		<div class="col-sm-6" >
			<label>Gender</label>
			<select class="form-control">
				<option value="">---Gender---</option>
				<option value="1">Male</option>
				<option value="2">Female</option>
				<option value="3">Other</option>
			</select>
		</div>
		<div class="col-sm-6">
			<label>Mobile No.</label>
			<input type="text" name="" class="form-control">
		</div>
	</div>
	<div class="form-group row">
		<div class="col-sm-6">
			<label>Aadhaar No.<span class="text-danger">*</span></label>
			<input type="text" name="" class="form-control">
		</div>
	</div>
	<div class="form-group row">
		<div class="col-sm-6">
			<label>Address</label>
			<textarea class="form-control" rows="4"></textarea>
		</div>
	</div>

</div>
</body>
</html>