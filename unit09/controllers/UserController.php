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
			require_once('view/user/add.php');;
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
			$user = $this->model->find($id);
			require_once('view/user/edit.php');
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