<?php
  session_start();
  if(isset($_SESSION['documents'])){
    $documents=$_SESSION['documents'];
  }
  else {
    $documents=array();
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
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <!-- Latest compiled and minified JavaScript -->
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
</head>
<body>
	
	
	<div class="container">

    <h2 align="center" >Documents Storage</h2>
    <?php
      if(isset($_COOKIE['msg'])){   
    ?>
    <div class="alert alert-success">
      <strong>Success!</strong>
      <?php
        echo $_COOKIE['msg'];
      ?>
    </div>
    <?php
    }
  ?>
		<table class="table">
  <thead>
    <tr>
      <th scope="col">No</th>
      <th scope="col">Name</th>
      <th scope="col">Download</th>
      <th scope="col">Delete</th>
    </tr>
  </thead>
  <tbody>
  	 <?php
  		$i=0;
  		foreach ($documents as $document) {
  			$i++;
  		
  	?>
    <tr>
      <td><?= $i; ?></td>
      <td><?= $document['name']; ?></td>
      <td><a href="" class="btn btn-primary" download="<?= $document['file-upload']; ?>">Download <i class="fa fa-download" aria-hidden="true"></i></a> </td>
      <td><a href="removefile.php?name=<?=$document['name']?>" class="btn btn-danger">Delete <i class="fa fa-trash-o" aria-hidden="true"></i></a></td>
    </tr>
    <?php
		};
    ?> 
    
  </tbody>

</table>
<a href="uploadfile.php" class="btn btn-success">Upload File Here </a>
		
	</div>
</body>
</html>