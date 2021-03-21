<?php
    session_start();


    if (isset($_SESSION['documents'])) {
        $uploads = $_SESSION['documents']; 
    }else{
        $uploads = array();
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
  <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">

    <!-- Optional theme -->
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap-theme.min.css">

    <!-- Latest compiled and minified JavaScript -->
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
</head>
<body>
	<h3 align="center">-----Documents Storage-----</h3>
	
	<div class="container">
		<table class="table">
  <thead>
    <tr>
      <th scope="col">No</th>
      <th scope="col">Name</th>
      <th scope="col">Download</th>
      <th scope="col">#</th>
    </tr>
  </thead>
  <tbody>
  	 <?php
  		$i=0;
  		foreach ($uploads as $upload) {
  			$i++;
  		
  	?>
    <tr>
      <td><?= $i; ?></td>
      <td><?= $upload['name']; ?></td>
      <td><a href="<?= $upload['file_upload']; ?>" class="btn btn-success" download="<?= $upload['file_upload']; ?>">download</a> </td>
      <td><a href="remove.php?name=<?= $upload['name']; ?>" class="btn btn-warning">Delete</a></td>
    </tr>
    <?php
		};
    ?>
    
  </tbody>

</table>
<a href="upload.php" class="btn btn-success">Upload File Here </a>
		
	</div>
</body>
</html>