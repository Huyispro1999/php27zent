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
    <h3 align="center">Add New Post</h3>
    <hr>
        <form action="index.php?mod=post&act=store" method="POST" role="form" enctype="multipart/form-data">

            <div class="form-group">
                <label for="">Title</label>
                <input type="text" class="form-control" id="" placeholder="" name="title" required="true">
            </div>
            <div class="form-group">
                <label for="">Description</label>
                <input type="text" class="form-control" id="" placeholder="" name="description" required="true">
            </div>
            <div class="form-group">
                <label for="">Content</label>
                <input type="text" class="form-control" id="" placeholder="" name="content"  required="true">
            </div>
            <div class="form-group">
                <label for="">View-Count</label>
                <input type="text" class="form-control" id="" placeholder="" name="view_count"  required="true">
            </div>
            <div class="form-group">
                <label for="">User ID</label>
                <input type="text" class="form-control" id="" placeholder="" name="user_id"  required="true">
            </div>
            <div class="form-group">
                <label for="">Category ID</label>
                <input type="text" class="form-control" id="" placeholder="" name="category_id"  required="true">
            </div>
            <button type="submit" class="btn btn-primary">Create</button>
        </form>
    </div>
</body>
</html>