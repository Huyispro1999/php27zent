<?php
	session_start();
	if (isset($_GET['name'])) {
		$name=$_GET['name'];
		unset($_SESSION['document'][$name]);
		# code...
	}
	header('Location:storage.php')
?>