<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>USERS MANAGEMENT</title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="http://netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">

    <!-- Optional theme -->
    <link rel="stylesheet" href="http://netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap-theme.min.css">

    <!-- Latest compiled and minified JavaScript -->
    <script src="http://netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
</head>
<body>
    <div class="container">
        <h3 class="text-center">--- USERS MANAGEMENT ---</h3>
        <a href="user_add.php" class="btn btn-primary">Add New User</a>
        <div class="alert alert-danger" role="alert" style="width: 20%;margin-top: 3px;border-radius: 10px;color: red;text-align: center;font-size: 15px">
            <?php echo (isset($_COOKIE['user_add_msg'])?$_COOKIE['user_add_msg']:''); ?>
        </div>
         
        <table class="table">
            <thead>
                <th>ID</th>
                <th>Name</th>
                <th>Email</th>
                <th>Avatar</th>
                <th>Action</th>
            </thead>
            <?php foreach ($users as $user) {
            ?>
            <tr>
                <td><?= $user['id'] ?></td>
                <td><?= $user['name'] ?></td>
                <td><?= $user['email'] ?></td>
                <td>
                    <img src="https://scontent.fhan3-1.fna.fbcdn.net/v/t1.6435-9/148577538_1671343876400954_4893659729706400408_n.jpg?_nc_cat=110&ccb=1-3&_nc_sid=09cbfe&_nc_ohc=Td-2I2FTLdoAX97lRF3&_nc_ht=scontent.fhan3-1.fna&oh=f2a18ff347ec10a4f24e18f191640aa7&oe=608A4D4B" width="100px" height="100px">
                </td>
                <td>
                    <a href="index.php?mod=user&act=detail&id=<?= $user['id'] ?>" class="btn btn-primary">Detail</a>
                    <a href="index.php?mod=user&act=edit&id=<?= $user['id'] ?>" class="btn btn-success">Edit</a>
                    <a href="index.php?mod=user&act=delete&id=<?= $user['id'] ?>" class="btn btn-danger">Delete</a>
                </td>
            </tr>
            
        <?php } ?>
        </table>
    </div>
</body>
</html>
