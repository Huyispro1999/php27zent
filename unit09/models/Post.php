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
		function create($data){
			$sql="INSERT INTO posts (title, description,content,view_count,user_id,category_id) VALUES ('".$data['title']."','".$data['description']."','".$data['content']."','".$data['view_count']."','".$data['user_id']."','".$data['category_id']."')";
			return $this->connection->query($sql);

		}
		function delete($id){
			$sql = "DELETE FROM posts WHERE id = ".$id;
			return $this->connection->query($sql);
		}
		function update($data){
			$sql = "UPDATE posts SET title='".$data['title']."',description='".$data['description']."',content='".$data['content']."',view_count='".$data['view_count']."' WHERE id=".$data['id'];

			return $this->connection->query($sql);
		}
	}

	// $category = new Category();

	// $categories = $category->all();

	// echo "<pre>";
	// 	print_r($categories);
	// echo "</pre>";
 ?>