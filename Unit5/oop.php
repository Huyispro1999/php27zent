<?php
	//Thiết kế lớp bài viết bao gồm các thông tin sau:
	//Thuộc tính:tiêu đề, đường dẫn, mô tả, nội dung
	//Phương thức: In ra thông tin bài viết
	class posts{
		private $title;
		private $path;
		private $description;
		private $content;
		function __construct($title,$path,$description,$content){
			$this->title=$title;
			$this->path=$path;
			$this->description=$description;
			$this->content=$content;

		}
		function get_title(){
			return $this->$title;
		}
		function get_path(){
			return $this->$path;
		}

		function get_description(){
			return $this->$description;
		}
		function get_content(){
			return $this->$content;
		}
		function show_info(){
			echo "<h2>Thông tin bài viết</h2><br>";
			echo "Title:{$this->title}<br>Path:{$this->path}<br>Description:{$this->description}<br>Content:{$this->content}";
		}

	}
	//Thiết kế lớp danh mục bao gồm các thông tin sau:
	//Thuộc tính: tên, đường dẫn,danh mục cha, ảnh hiển thị, mô tả
	//Phương thức: In ra thông tin danh mục
	class categories{
		private $name;
		private $path;
		private $parent_category;
		private $image;
		private $description;
		function __construct($name,$path,$parent_category,$image,$description){
			$this->name=$name;
			$this->path=$path;
			$this->parent_category=$parent_category;
			$this->image=$image;
			$this->description=$description;
		} 
		function get_name(){
			return $this->name;
		}
		function get_path(){
			return $this->path;
		}
		function get_parent_category(){
			return $this->parent_category;
		}
		function get_image(){
			return $this->image;
		}
		function get_description(){
			return $this->description;
		}
		function show_info(){
			echo "<h2>Thông tin danh mục:</h2><br>";
			echo "Name:{$this->name}.<br>Path:{$this->path}.<br>Parent Category:{$this->parent_category}.<br>Image:{$this->image}.<br>Description:{$this->description}";
		}
	}
		//Thiết kế lớp người dùng bao gồm các thông tin sau:
		//Thuộc tính:tên, email, mật khẩu, ảnh đại diện
		//Phương thức: In ra thông tin người dùng
		class users{
			private $name;
			private $email;
			private $password;
			private $avatar;
			function __construct($name,$email,$password,$avatar){
				$this->name=$name;
				$this->email=$email;
				$this->password=$password;
				$this->avatar=$avatar;
			}
			function get_name(){
				return $this->name;
			}
			function get_email(){
				return $this->email;
			}
			function get_password(){
				return $this->password;
			}
			function get_avatar(){
				return $this->avatar;
			}
			function show_info(){
				echo "<h2>Thông tin người dùng:</h2>";
				echo "Name:{$this->name}.<br>Email:{$this->email}.<br>Password:{$this->password}.<br>Avatar:{$this->avatar}";
			}
		}
	
	$post_1= new posts("Việt Nam hôm nay","vietnam.com.vn","Bản tin thời sự VN hôm nay","Bản tin bao gồm hàng loạt tin nóng trong và ngoài nước");
	$post_1->show_info();
	$categories_1= new categories("Danh mục 1","danhmuc1.vn","Danh mục chính","img8.jpg","Đây là ví dụ về danh mục trong lập trình hướng đối tượng OOP");
	$categories_1->show_info();
	$user1=new users("Nguyễn Huy","huyrooney32@gmail.com","huyhy1999","avatar.jpg");
	$user1->show_info();

?>