<?php 
	require_once('models/User.php');
	class UserController{
		function __construct(){
			
		}
		function list(){
			$model = new User();
			$users = $model->all();
			require_once('view/user/list.php');
		}
		function detail(){
			$model = new User();
			$id=$_GET['id'];
			$user = $model->find($id);
			require_once('view/user/detail.php');
		}
		function add(){
			echo "<br> Form thêm mới category";
		}
		function add_process(){
			echo "<br> process thêm mới category";
		}
		function edit(){
			echo "<br> Form sửa category";
		}

	}
 ?>