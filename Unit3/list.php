<?php
	session_start();
	if (isset($_SESSION['info'])) {
		$data_arr=$_SESSION['info'];
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
	<div class="container">
		<h3 style="text-align: center;">Danh sách người dùng</h3>
		<a class="btn btn-primary" href="add.php" role="button" style="margin-bottom: 40px">Thêm mới</a>
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
      <th scope="col">#</th>
      <th scope="col">Mã sinh viên</th>
      <th scope="col">Họ tên</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
  	<?php
  		$i=0;
  		foreach ($data_arr as $value) {
  			$i++;
  		
  	?>
    <tr>
      <td><?php echo $i;?></td>
      <td><?php echo $value['maSV'];?></td>
      <td><?php echo $value['hoTen'];?></td>
      <td>
      	<a class="btn btn-success" href="detail.php?maSV=<?php echo $value['maSV']?>"role="button">Xem TT</a>
      	<a class="btn btn-success" href="xoa.php?maSV=<?php echo $value['maSV']?>"role="button">Xoá TT</a>
      </td>
    </tr>
    <?php
		}
    ?>
    
  </tbody>
</table>
	</div>
</body>
</html>