<?php
require_once('connection_db.php');
$id = $_GET['id'];
// Câu lệnh truy vấn
$query = "DELETE FROM users WHERE id = ".$id;

// Thực thi câu lệnh
$result = $conn->query($query);
if($result == true){
setcookie('user_add_msg','Xóa thành công',time()+5);
header('Location: user.php');
}else{
setcookie('user_add_msg','Xóa KHÔNG thành công',time()+5);
header('Location: user.php');
}
?>