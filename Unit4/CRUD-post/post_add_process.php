<?php

// $servername = "localhost"; //255.123.45.21 - Địa chỉ IP của máy chủ chứa CSDL

// $username = "root";   // Tên đăng nhập
    
// $password = "";    // Mật khẩu truy cập
    
// $dbname = "test";   // Tên cơ sở dữ liệu muốn kết nối đến

    
// // Tạo kết nối đến CSDL
    
// $conn = new mysqli($servername, $username, $password, $dbname);
	// Lấy dữ9 liệu từ form gửi lên, gán vào biến data
 require_once('connect.php');
    $data = $_POST;

// Viết câu lệnh để thêm dữ liệu
    $query = "INSERT INTO posts (title, description,content,view_count,user_id,category_id) VALUES ('".$data['title']."','".$data['description']."','".$data['content']."','".$data['view_count']."','".$data['user_id']."','".$data['category_id']."')";

// Thực thi câu lệnh
    $status = $conn->query($query);
    // echo "$query";

     if ($status == true) {
     	setcookie('post_add_msg','Thêm mới thành công!', time()+5);
     	header('Location: post.php');
     }else{
     	setcookie('post_add_msg','Thêm mới không thành công!', time()+5);
     	header('Location: post.php');
     }
?>