<?php
	$id=$_GET['id'];
	require 'connection_db.php';
	$query = "SELECT * FROM users WHERE id=".$id;
	// Thực thi câu lệnh
	$result = $conn->query($query);
	$user=$result->fetch_assoc();
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>USER DETAIL</title>
	<link rel="stylesheet" href="http://netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">

    <!-- Optional theme -->
    <link rel="stylesheet" href="http://netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap-theme.min.css">

    <!-- Latest compiled and minified JavaScript -->
    <script src="http://netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
</head>
<body>
	<h1>Detailed Information</h1>
	<h3>USER ID: <?= $user['id']?></h3>
	<h3>USER Name: <?= $user['name']?></h3>
	<h3>USER Email: <?= $user['email']?></h3>
	<h3>USER Avatar: <?= $user['avatar']?></h3>
	
	<a href="user.php" class="btn btn-primary">Back Here</a>
</body>
</html>