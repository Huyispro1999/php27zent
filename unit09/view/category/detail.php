<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Detail</title>
	
</head>
<body>
	
	<h1>Detailed Information</h1>
	<h3>Category ID: <?= $category['id']?></h3>
	<h3>Category Name: <?= $category['name']?></h3>
	<h3>Category Des: <?= $category['description']?></h3>
	<h3>Category Slug: <?= $category['slug']?></h3>
	<h3>Category Created:<?= $category['created_at']?></h3>
	
</body>
</html>
