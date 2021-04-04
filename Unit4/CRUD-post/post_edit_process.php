<?php
require_once('connect.php');
$data = $_POST;

// Viết câu lệnh để thêm dữ liệu
    $query = "UPDATE posts SET title='".$data['title']."',description='".$data['description']."',content='".$data['content']."',view_count='".$data['view_count']."' WHERE id=".$data['id'];

// Thực thi câu lệnh
    $status = $conn->query($query);

    if ($status == true) {
    	setcookie('post_add_msg','Sửa thành công!', time()+5);
    	header('Location: post.php');
    }else{
    	setcookie('post_add_msg','Sửa không thành công!', time()+5);
    	header('Location: post.php');
    }
?>