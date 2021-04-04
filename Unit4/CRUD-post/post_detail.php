<?php
	$id=$_GET['id'];
	require_once ('connect.php');
	$query = "SELECT * FROM posts WHERE id=".$id;
	// Thực thi câu lệnh
	$result = $conn->query($query);
	$post=$result->fetch_assoc();
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>
	<h1>Detailed Information</h1>
	<h3>Post ID:<?= $post['id']?></h3>
	<h3>Post Title:<?= $post['title']?></h3>
	<h3>Post Description:<?= $post['description']?></h3>
	<h3>Post Thumbnail: <?= $post['thumbnail']?></h3>
	<h3>Post Content:<?= $post['content']?></h3>
	<h3>Post Viewcount:<?= $post['view_count']?></h3>
	<h3>Post UserID:<?= $post['user_id']?></h3>
	<h3>Post CategoryID:<?= $post['category_id']?></h3>
	<a href="post.php" class="btn-primary">Back</a>
</body>
</html>