<?php
require_once("connect_db.php");
$sql = "SELECT * FROM topic";
$result = mysqli_query($conn, $sql);
$list = '';

while( $row = mysqli_fetch_array($result) ) {
	$escaped_title = htmlspecialchars($row['title']);
	$list = $list . "<li><a href=\"index.php?id={$row['id']}\">{$escaped_title}</a></li>";
}
?>
<!doctype html>
<html>
	<head>
    	<meta charset="utf-8">
		<title>WEB</title>
	</head>
  	<body>
    	<h1><a href="index.php">WEB</a></h1>
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