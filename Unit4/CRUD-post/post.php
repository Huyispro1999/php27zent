<?php
    // Thong so ket noi CSDL
    
// $servername = "localhost"; //255.123.45.21 - Địa chỉ IP của máy chủ chứa CSDL

// $username = "root";   // Tên đăng nhập
    
// $password = "";    // Mật khẩu truy cập
    
// $dbname = "test";   // Tên cơ sở dữ liệu muốn kết nối đến

    
// // Tạo kết nối đến CSDL
    
// $conn = new mysqli($servername, $username, $password, $dbname);
// Câu lệnh truy vấn
require_once('connect.php');
$query = "SELECT * FROM posts";

// Thực thi câu lệnh
$result = $conn->query($query);
// Tạo 1 mảng để chứa dữ liệu
$posts = array();

while($row = $result->fetch_assoc()) { 
    $posts[] = $row;
}

?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>USERS</title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="http://netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">

    <!-- Optional theme -->
    <link rel="stylesheet" href="http://netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap-theme.min.css">

    <!-- Latest compiled and minified JavaScript -->
    <script src="http://netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
</head>
<body>
    <div class="container-fluid">
        <h3 class="text-center">--- POSTS ---</h3>
        <a href="add_post.php" class="btn btn-primary">Add New Post</a>
       <strong><?php echo (isset($_COOKIE['post_add_msg'])?$_COOKIE['post_add_msg']:''); ?></strong>
        <table class="table">
            <thead>
                <th>ID</th>
                <th>Title</th>
                <th>Description</th>
                <th>Thumnail</th>
                <th>Content</th>
              <!--   <th>Slug</th> -->
                <th>View_count</th>
                <th>User_ID</th>
                <th>Category_ID</th>
                <th>Action</th>
            </thead>
            <?php foreach ($posts as $post) {
            ?>
            <tr>
                <td align="center"><?= $post['id'] ?></td>
                <td align=""><?= $post['title'] ?></td>
                <td align="" ><?= $post['description'] ?></td>
                <td align="center">
                    <img src="https://video-thumbs.mediacdn.vn//vtv/2018/10/2/0210thoi-su-19h-15384852850441347953968-a1b84_thumb3.jpg" width="100px" height="100px">
                </td>
                <td align=""><?= $post['content'] ?></td>
                <!-- <td><?= $post['slug'] ?></td> -->
                <td align="center"><?= $post['view_count'] ?></td>
                <td align="center"><?= $post['user_id'] ?></td>
                <td align="center"><?= $post['category_id'] ?></td>

                <td align="center">
                    <a href="post_detail.php?id=<?= $post['id'] ?>" class="btn btn-primary">Detail</a>
                    <a href="post_edit.php?id=<?= $post['id'] ?>" class="btn btn-success">Edit</a>
                    <a href="post_delete.php?id=<?= $post['id'] ?>" class="btn btn-danger">Delete</a>
                </td>
            </tr>
            
        <?php } ?>
        </table>
    </div>
</body>
</html>
