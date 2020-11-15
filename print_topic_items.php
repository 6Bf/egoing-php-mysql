<?php
require_once("connect_db.php");
	
/* 쿼리문으로 가져온 데이터를 배열로 변환한 뒤 반복문을 활용하여 출력한다.
*/

function print_list() {
	global $conn;
	$sql = "SELECT * FROM topic";
	$result = mysqli_query($conn, $sql);
	
	while($row = mysqli_fetch_array($result)) {
		$list = $row['title'];
		echo "<li><a href=\"index.php?id={$row['id']}\">{$list}</a></li>";
	}	
}

function print_title() {
	global $conn;
	
	if(isset($_GET['id'])) {
		$sql = "SELECT title FROM topic WHERE id={$_GET['id']}";
		$result = mysqli_query($conn, $sql);
		$row = mysqli_fetch_array($result);
		
		echo $row['title'];
	}
	else {
		echo "<h2>Welcome</h2>";
	}
}

function print_description() {
	global $conn;
	
	if(isset($_GET['id'])) {
		$sql = "SELECT description FROM topic WHERE id={$_GET['id']}";
		$result = mysqli_query($conn, $sql);
		$row = mysqli_fetch_array($result);
		
		echo $row['description'];
	}
	else {
		echo "Welcome to my house!";
	}
}
	
?>
