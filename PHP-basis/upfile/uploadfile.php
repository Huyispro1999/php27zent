
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
    <div class="container-fluid" style="background-color: pink;border-radius: 15px;margin-top: 2%" >
        <h2 align="center" style="">Upload Documents</h2>
	<form id="demoForm" action="" method="POST" role="form" enctype="multipart/form-data" >
            <!-- <legend style="text-align: center; !important">Upload</legend> -->
            <a href="storage.php" class="btn btn-success" style="margin-bottom: 1%;margin-top: 1%;border-radius: 15px;">Storage</a>
            <div class="form-group">
                <label for="name">Document name:</label>
                <input type="text" class="form-control" id="name" name="name" required>
            </div>
            
            <div class="form-group">
                <label for="file_upload"></label>
                <input type="file" class="form-control" id="file-upload" name="file-upload">
            </div>  
            <button type="submit" class="btn btn-success" name="submit" style="border-radius: 15px;margin-bottom: 2%">Upload</button>
        </form>
        </div>
</body>
</html>
<?php
        session_start();
        if(isset($_POST['submit'])){ // kiểm tra xem button Submit đã được click hay chưa ? 
        $name = $_POST['name'];

        $target_dir = "storage/";  // thư mục chứa file upload

        $target_file = $target_dir . basename($_FILES["file-upload"]["name"]);
         // link sẽ upload file lên
        
        if (move_uploaded_file($_FILES["file-upload"]["tmp_name"], $target_file)) { // nếu upload file không có lỗi 
            // echo "<h2>Documents:". basename( $_FILES["file-upload"]["name"]). " have just pushed successfully.</h2>";
            echo "File has been uploaded successfully!";
            setcookie('msg','Upload Successfully!',time()+5);
            $_SESSION['documents'][$name] = [
                'name' => $name,
                'file-upload' => $target_file,
            ];
        } else { // Upload file có lỗi 
            echo "There are some errors existing. Fail uploading!";
        } 


        
    }
    // header('Location:storage.php')

?>