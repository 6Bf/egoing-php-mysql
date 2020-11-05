<?php
require_once("connect_db.php");
$sql = "SELECT * FROM topic";
$result = mysqli_query($conn, $sql);
$list = '';

while( $row = mysqli_fetch_array($result) ) {
	$escaped_title = htmlspecialchars($row['title']);
	$list = $list . "<li><a href=\"index.php?id={$row['id']}\">{$escaped_title}</a></li>";
}

$article = array('title' => 'Welcome', 'description' => 'Hello, web!');

if(isset($_GET['id'])) {
	$filtered_id = mysqli_real_escape_string($conn, $_GET['id']);
	$sql = "SELECT * FROM topic WHERE id={$filtered_id}";
	$result = mysqli_query($conn, $sql);
	$row = mysqli_fetch_array($result);
	$article['title'] = htmlspecialchars($row['title']);
	$article['description'] = htmlspecialchars($row['description']);
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
    	<form action="process_update.php" method="POST">
			<div><input type="hidden" name="id" value="<?= $_GET['id'] ?>" /></div>
    		<div><input type="text" name="title" placeholder="title" value="<?= $article['title'] ?>"></div><br/>
			<div><textarea name="description" placeholder="description"><?= $article['description'] ?></textarea></div><br/>
      		<div><input type="submit"></div>
    	</form>
	</body>
</html>