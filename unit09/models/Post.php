<?php 
	require_once('Connection.php');
	class Post{
		var $connection;

		function __construct(){
			$Connection_obj = new Connection();
			$this->connection = $Connection_obj->conn;
		}

		function all(){

			$sql = "SELECT * FROM posts";

			// Thực thi câu lệnh
			$result = $this->connection->query($sql);

			// Tạo 1 mảng để chứa dữ liệu
			$posts = array();

			while($row = $result->fetch_assoc()) { 
				$posts[] = $row;
			}

			return $posts;
		}
		function find($id){
			$sql = "SELECT * FROM posts WHERE id=".$id;

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