<?php
	session_start();

	if (isset($_GET['name'])) {
		$name = $_GET['name'];
		unset($_SESSION['documents'][$name]);
	}
	header('location:index.php');
?>