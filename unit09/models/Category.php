<?php 
	require_once('Connection.php');
	class Category{
		var $connection;

		function __construct(){
			$Connection_obj = new Connection();
			$this->connection = $Connection_obj->conn;
		}

		function all(){

			$sql = "SELECT * FROM categories";

			// Thực thi câu lệnh
			$result = $this->connection->query($sql);

			// Tạo 1 mảng để chứa dữ liệu
			$categories = array();

			while($row = $result->fetch_assoc()) { 
				$categories[] = $row;
			}

			return $categories;
		}
		function find($id){
			$sql = "SELECT * FROM categories WHERE id=".$id;

			// Thực thi câu lệnh
			$result = $this->connection->query($sql);
			return $result->fetch_assoc();
		}
		function create($data){
			$sql="INSERT INTO categories (name, description) VALUES ('".$data['name']."','".$data['description']."')";
			return $this->connection->query($sql);

		}
		function delete($id){
			$sql="DELETE FROM categories WHERE id = ".$id;
			return $this->connection->query($sql);
		}
		function update($data){
			 $sql = "UPDATE categories SET name='".$data['name']."',description='".$data['description']."' WHERE id=".$data['id'];

			return $this->connection->query($sql);
		}

	}

	// $category = new Category();

	// $categories = $category->all();

	// echo "<pre>";
	// 	print_r($categories);
	// echo "</pre>";
 ?>