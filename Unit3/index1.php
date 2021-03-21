<?php
	require('data.php');
	
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
		<a href="cart.php">Xem giỏ hàng</a>
		<h3 style="text-align: center;">Danh sách giỏ hàng</h3>

	<table class="table">
  <thead>
    <tr>
      <th scope="col">STT</th>
      <th scope="col">Mã sản phẩm</th>
      <th scope="col">Tên sản phẩm</th>
      <th scope="col">Đơn giá</th>
      <th scope="col">Số lượng</th>
      <th scope="col">#</th>
    </tr>
  </thead>
  <tbody>
  	<?php
  		$i=0;
  		foreach ($products as $product) {
  			$i++;
  		
  	?>
    <tr>
      <td><?=$i?></td>
      <td><?=$product['maSP']?></td>
      <td><?=$product['tenSP']?></td>
      <td><?=number_format($product['donGia'])?></td>
      <td><?=$product['soLuong']?></td>
      <td><a href="add2cart.php?maSP=<?=$product['maSP']?>" class="btn btn-success">Add to cart</a></td>
    </tr>
    <?php
		}
    ?>
    
  </tbody>
</table>
	</div>
</body>
</html>