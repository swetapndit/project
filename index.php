<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "first_project";
$successMessage = '';
// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
if($_POST){
	$name = $_POST['name'];
	$mobile = $_POST['mobile'];
	$email = $_POST['email'];
	$sql = "INSERT INTO users (name, mobile, email)
	VALUES ('$name', '$mobile', '$email')";

	if (mysqli_query($conn, $sql)) {
	    $successMessage = "New record created successfully";
	} else {
	    $successMessage = "Error: " . $sql . "<br>" . mysqli_error($conn);
	}
	//print_r($_POST);exit;
}

/*
$sql = "INSERT INTO users (name, mobile, email)
VALUES ('John', '9122841689', 'john@example.com')";

if (mysqli_query($conn, $sql)) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
*/

mysqli_close($conn);
?>

<html>
<body>
<?php
echo $successMessage;
?>
<form action="" method="post">
	Name: <input type="text" name="name" placeholder="User Name"><br>
	Mobile: <input type="text" name="mobile" placeholder="Phone No."><br>
	Email: <input type="text" name="email" placeholder="Email Id"><br>
<!-- Name: <input type="text" name="sweta"><br>
E-mail: <input type="text" name="sweta@gmail.com"><br> -->
<input type="submit">
</form>

</body>
</html>

