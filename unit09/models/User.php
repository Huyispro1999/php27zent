<?php 
	require_once('Connection.php');
	class User{
		var $connection;

		function __construct(){
			$Connection_obj = new Connection();
			$this->connection = $Connection_obj->conn;
		}

		function all(){

			$sql = "SELECT * FROM users";

			// Thực thi câu lệnh
			$result = $this->connection->query($sql);

			// Tạo 1 mảng để chứa dữ liệu
			$users = array();

			while($row = $result->fetch_assoc()) { 
				$users[] = $row;
			}

			return $users;
		}
		function find($id){
			$sql = "SELECT * FROM users WHERE id=".$id;

			// Thực thi câu lệnh
			$result = $this->connection->query($sql);
			return $result->fetch_assoc();
		}
		function create($data){
			$sql="INSERT INTO users (name, email,avatar) VALUES ('".$data_user['name']."','".$data_user['email']."','".$data_user['avatar']."')";
			return $this->connection->query($sql);

		}
		function delete($id){
			$sql = "DELETE FROM users WHERE id = ".$id;
			return $this->connection->query($sql);
		}
		function update($data){
			$sql = "UPDATE users SET name='".$data['name']."',email='".$data['email']."',avatar='".$data['avatar']."' WHERE id=".$data['id'];

			return $this->connection->query($sql);
		}
	}

	// $category = new Category();

	// $categories = $category->all();

	// echo "<pre>";
	// 	print_r($categories);
	// echo "</pre>";
 ?>