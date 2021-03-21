<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Form</title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">

    <!-- Optional theme -->
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap-theme.min.css">

    <!-- Latest compiled and minified JavaScript -->
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
</head>
<body>
    <div class="container">
        
        <form action="add_process.php" method="POST" role="form">
            <legend>HOMEWORK 2</legend>
           
            <div class="form-group">
                <label for="">Mã sinh viên </label>
                <input type="text" class="form-control" id="" placeholder="Nhập mã sinh viên" name="maSV">
            </div>
            
            <div class="form-group">
                <label for="">Họ và tên</label>
                <input type="text" class="form-control" id="" placeholder="Nhập vào họ tên" name="hoTen">
            </div> 
            <div class="form-group">
                <label for="">Số điện thoại</label>
                <input type="text" class="form-control" id="" placeholder="Nhập vào số điện thoại" name="soDT">
            </div> 
            <div class="form-group">
                <label for="">Email</label>
                <input type="text" class="form-control" id="" placeholder="Nhập vào email" name="email">
            </div> 
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="gioiTinh" id="inlineRadio1" value="Nam">
                <label class="form-check-label" for="inlineRadio1">Nam</label>
            </div>
            <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="gioiTinh" id="inlineRadio2" value="Nữ">
            <label class="form-check-label" for="inlineRadio2">Nữ</label>
            </div>
            <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="gioiTinh" id="inlineRadio3" value="Khác" >
            <label class="form-check-label" for="inlineRadio3">Khác</label>
            </div> 
            <div class="form-group">
                <label for="">Địa chỉ</label>
                <input type="text" class="form-control" id="" placeholder="Nhập vào địa chỉ" name="diaChi">
            </div> 

            
            <button type="submit" class="btn btn-primary">Lưu thông tin</button>
        </form>
    </div>
</body>
</html>