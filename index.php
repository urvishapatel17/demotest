<?php $actual_link = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
// echo $actual_link;
?>
<!DOCTYPE html>
<html>
<head>
	<title>My test Page</title>
</head>
<body>
	<nav>
		<a href="<?php echo $actual_link; ?>">home</a>
		<a href="<?php echo $actual_link; ?>/test.php" target="_blank">testpage</a>

	</nav>
</body>
</html>