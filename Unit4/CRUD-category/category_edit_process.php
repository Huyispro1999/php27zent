<?php
require'connection.php';
$data = $_POST;

// Viết câu lệnh để thêm dữ liệu
    $query = "UPDATE categories SET name='".$dat['name']."',description='".$data['description']."' WHERE id=".$data['id'];

// Thực thi câu lệnh
    $status = $conn->query($query);

    if ($status == true) {
    	setcookie('cate_add_msg','Thêm mới thành công!', time()+5);
    	header('Location: category.php');
    }else{
    	setcookie('cate_add_msg','Thêm mới không thành công!', time()+5);
    	header('Location: category.php');
    }
?>