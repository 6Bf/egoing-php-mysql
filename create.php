<?php
require_once("connect_db.php");
$sql = "SELECT * FROM topic";
$result = mysqli_query($conn, $sql);
$list = '';

while( $row = mysqli_fetch_array($result) ) {
	$list = $list . "<li><a href=\"index.php?id={$row['id']}\">{$row['title']}</a></li>";
}

$article = array('title' => 'Welcome', 'description' => 'Hello, web!');

if(isset($_GET['id'])) {
	$sql = "SELECT * FROM topic WHERE id={$_GET['id']}";
	$result = mysqli_query($conn, $sql);
	$row = mysqli_fetch_array($result);
	$article['title'] = $row['title'];
	$article['description'] = $row['description'];
}
//print_r($article);
?>
<!doctype html>
<html>
	<head>
    	<meta charset="utf-8">
    	<title>WEB</title>
	</head>
	<body>
    	<h1>WEB</h1>
    	<ol>
			<?= $list ?>
    	</ol>
    	<form action="process_create.php" method="POST">
    		<div><input type="text" name="title" placeholder="title"></div><br/>
			<div><textarea name="description" placeholder="description"></textarea></div><br/>
      		<div><input type="submit"></div>
    	</form>
	</body>
</html>