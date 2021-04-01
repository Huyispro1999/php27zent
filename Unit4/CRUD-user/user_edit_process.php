<?php
require'connection_db.php';
$data = $_POST;

// Viết câu lệnh để thêm dữ liệu
    $query = "UPDATE users SET name='".$data['name']."',email='".$data['email']."',avatar='".$data['avatar']."' WHERE id=".$data['id'];

// Thực thi câu lệnh
    $status = $conn->query($query);

    if ($status == true) {
    	setcookie('user_add_msg','Sửa thành công!', time()+5);
    	header('Location: user.php');
    }else{
    	setcookie('user_add_msg','Sửa không thành công!', time()+5);
    	header('Location: user.php');
    }
?>