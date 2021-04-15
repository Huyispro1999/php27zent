<?php 
	require_once('models/Category.php');
	class CategoryController{
		var $model;
		function __construct(){
			$this->model= new Category();
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
			require_once('view/category/add.php');
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
			$category = $this->model->find($id);
			require_once('view/category/edit.php');
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