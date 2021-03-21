
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
	<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">

    <!-- Optional theme -->
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap-theme.min.css">

    <!-- Latest compiled and minified JavaScript -->
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
</head>
<body>
	<form id="demoForm" action="" method="POST" role="form" enctype="multipart/form-data" >
            <!-- <legend style="text-align: center; !important">Upload</legend> -->
            <a href="index.php" class="btn btn-success">Kho lưu trữ </a>
            <div class="form-group">
                <label for="name">Tên tài liệu</label>
                <input type="text" class="form-control" id="name" name="name" required>
            </div>
            
            <div class="form-group">
                <label for="file_upload"></label>
                <input type="file" class="form-control" id="file_upload" name="file_upload">
            </div>  
            <button type="submit" class="btn btn-success" name="submit">Upload</button>
        </form>
</body>
</html>
<?php
   session_start();
   

       if(isset($_POST['submit'])){ // kiểm tra xem button Submit đã được click hay chưa ? 
        $name = $_POST['name'];

        $target_dir = "uploads/";  // thư mục chứa file upload

        $target_file = $target_dir . basename($_FILES["file_upload"]["name"]); // link sẽ upload file lên
        
        if (move_uploaded_file($_FILES["file_upload"]["tmp_name"], $target_file)) { // nếu upload file không có lỗi 
            echo "Documents ". basename( $_FILES["file_upload"]["name"]). " have just pushed successfully.";
            $_SESSION['documents'][$name] = [
                'name' => $name,
                'file_upload' => $target_file,
            ];
        } else { // Upload file có lỗi 
            echo "There are some errors existing";
        } 


        
    }
    // header("Location:index.php")
   /* echo "<pre>";
    print_r($_SESSION);
    echo "</pre>";*/
?>
