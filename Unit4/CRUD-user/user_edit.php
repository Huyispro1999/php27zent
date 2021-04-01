<?php
    $id=$_GET['id'];
    require 'connection_db.php';
    $query = "SELECT * FROM users WHERE id=".$id;
    // Thực thi câu lệnh
    $result = $conn->query($query);
    $user=$result->fetch_assoc();
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title></title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="http://netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">

    <!-- Optional theme -->
    <link rel="stylesheet" href="http://netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap-theme.min.css">

    <!-- Latest compiled and minified JavaScript -->
    <script src="http://netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
</head>
<body>
    <div class="container">
    <h3 align="center">Update User</h3>
    <hr>
        <form action="user_edit_process.php" method="POST" role="form" enctype="multipart/form-data">
            <div class="form-group">
                <label for="">Name</label>
                <input type="hidden" class="form-control" id="" placeholder="" name="id" value="<?= $user['id']?>">
                <input type="text" class="form-control" id="" placeholder="" name="name" value="<?= $user['name']?>">
            </div>
            <div class="form-group">
                <label for="">Email</label>
                <input type="text" class="form-control" id="" placeholder="" name="email" value="<?= $user['email']?>">
            </div>
            <div class="form-group">
                <label for="">Avatar</label>
                <input type="text" class="form-control" id="" placeholder="" name="avatar" value="<?= $user['avatar']?>">
            </div>
            <button type="submit" class="btn btn-primary">Update</button>
        </form>
    </div>
</body>
</html>