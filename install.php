<?php
	$mysql_info=array(
		'host'=>'localhost',
		'database'=>'test',
		'user'=>'root',
		'password'=>'root',
		'prefix'=>'zx_'
	);
	
	$mysqli=new mysqli();
	$mysqli = mysqli_connect($mysql_info['host'],
		$mysql_info['user'],$mysql_info['password'],$mysql_info['database']);
	if ( $mysqli ) {
	         echo "数据库连接成功！";
	}else {
	         echo "数据库连接失败！";
	}
	
	$mysqli->query("SET NAMES utf8");
	createTable("menu","pid int(2) not null,title varchar(10) not null,link varchar(20)");
	createTable("news","content text,menu_id int(2) not null,created datetime");
	createTable("users","name varchar(50) not null,email varchar(50),pwd varchar(255),photo varchar(255),created datetime");
	createTable("messages","name varchar(50),email varchar(50) not null,kind varchar(50),message text,isread tinyint(1),ip varchar(50),created datetime");
	
	$mysqli->close();
	echo "<br/>数据库连接断开！";
	
	//创建表
	function createTable($table,$query){
		global $mysql_info;    //调用全局变量
		global $mysqli;
		echo "<br/>";
		$tableComplete=$mysql_info['prefix'].$table;
		$result =mysqli_num_rows(mysqli_query($mysqli,"SHOW TABLES LIKE '$tableComplete'"));
		if($result>0){
			echo $tableComplete."表已存在！";
		}else{
			$result=$mysqli->query("CREATE TABLE $tableComplete(
				id INT(10) not null AUTO_INCREMENT,
				$query,
				primary key (id)
				) 
				charset =utf8;");
			if($result){
				echo $tableComplete."表创建成功！";
			}else{
				echo $tableComplete."表创建失败！".mysqli_error($mysqli);
			}
		}
	}