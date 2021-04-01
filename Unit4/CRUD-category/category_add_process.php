<?php

$servername = "localhost"; //255.123.45.21 - Địa chỉ IP của máy chủ chứa CSDL

$username = "root";   // Tên đăng nhập
    
$password = "";    // Mật khẩu truy cập
    
$dbname = "test";   // Tên cơ sở dữ liệu muốn kết nối đến

    
// Tạo kết nối đến CSDL
    
$conn = new mysqli($servername, $username, $password, $dbname);
	// Lấy dữ liệu từ form gửi lên, gán vào biến data
    $data = $_POST;

// Viết câu lệnh để thêm dữ liệu
    $query = "INSERT INTO categories (name, description) VALUES ('".$data['name']."','".$data['description']."')";

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