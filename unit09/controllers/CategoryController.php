<?php 
	require_once('models/Category.php');
	class CategoryController{
		function __construct(){
			
		}
		function list(){
			$model = new Category();
			$categories = $model->all();
			require_once('view/category/list.php');
		}
		function detail(){
			$model = new Category();
			$id=$_GET['id'];
			$category = $model->find($id);
			require_once('view/category/detail.php');
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