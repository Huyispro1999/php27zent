<?php 
	require_once('models/Post.php');
	class PostController{
		var $model;
		function __construct(){
			$this->model= new Post();
			
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
			require_once('view/post/add.php');
		}
		function store(){
			$data=$_POST;
			$status=$this->model->create($data);
			if($status==1){
				echo "Them moi thanh cong !";
			}
			else {
				echo "Them moi that bai !";
			}
		}
		function delete(){
			$id=$_GET['id'];
			$status=$this->model->delete($id);
			if($status==1){
				echo "Xoá thanh cong !";
			}
			else {
				echo "Xoá that bai !";
			}
		}
		function edit(){
			$id=$_GET['id'];
			$post = $this->model->find($id);
			require_once('view/post/edit.php');
		}
		function update(){
			$data=$_POST;
			$status=$this->model->update($data);
			if($status==1){
				echo "Update thanh cong !";
			}
			else {
				echo "Update that bai !";
			}
		}

	}
 ?>