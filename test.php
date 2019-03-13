<?php $actual_link = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
// echo $actual_link;
?>
<!DOCTYPE html>
<html>
<head>
	<title>helllo</title>
</head>
<body>
	<h2>heelllo</h2>
	<p>done dona done</p>
	<a href="<?php echo $actual_link; ?>">home</a>

	<?php 
		$servername = "localhost";
		$username = "root";
		$password = "";
		$dbname = "gitworkava";

		// Create connection
		$conn = new mysqli($servername, $username, $password, $dbname);
		// Check connection
		if ($conn->connect_error) {
		    die("Connection failed: " . $conn->connect_error);
		} 

		$fname= $_GET['fname'];
		$lname= $_GET['lname'];
		$sql = "INSERT INTO demotable (fname, lname)
		VALUES ('".$fname."','".$lname."')";

		if ($conn->query($sql) === TRUE) {
		    echo "<br/><p>New record created successfully</p><br/>";
		} else {
		    echo "Error: " . $sql . "<br>" . $conn->error;
		}

		$conn->close();

		echo "Welcome".$fname." ".$lname;
	?>
</body>
</html>