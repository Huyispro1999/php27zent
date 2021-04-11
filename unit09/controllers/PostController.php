<?php 
	require_once('models/Post.php');
	class PostController{
		function __construct(){
			
		}
		function list(){
			$model = new Post();
			$posts = $model->all();
			require_once('view/post/list.php');
		}
		function detail(){
			$model = new Post();
			$id=$_GET['id'];
			$post = $model->find($id);
			require_once('view/post/detail.php');
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