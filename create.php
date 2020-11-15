<?php
require_once("connect_db.php");
require_once("print_topic_items.php");

$sql = "SELECT * FROM author";
$result = mysqli_query($conn, $sql);
$select_form = '<select name="author_id">';
while( $row = mysqli_fetch_array($result) ) {
	$select_form .= '<option value="' .$row['id']. '">' .$row['name']. '</option>';
}
$select_form .= '</select>';
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
			<?php print_list(); ?>
    	</ol>
    	<form action="process_create.php" method="POST">
    		<div><input type="text" name="title" placeholder="title"></div><br/>
			<div><textarea name="description" placeholder="description"></textarea></div><br/>
			<p>
				<?= $select_form ?>
			</p>
      		<div><input type="submit"></div>
    	</form>
	</body>
</html>