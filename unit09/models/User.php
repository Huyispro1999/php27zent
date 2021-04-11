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
	}

	// $category = new Category();

	// $categories = $category->all();

	// echo "<pre>";
	// 	print_r($categories);
	// echo "</pre>";
 ?>