<?php
require_once("connect_db.php");
require_once("print_topic_items.php");

$update_link = '';
$delete_link = '';
$author = '';

if(isset($_GET['id'])) {
	$update_link = '<a href="update.php?id=' . $_GET['id'] . '">update</a>';
	$delete_link = '
		<form action="process_delete.php" method="post">
			<input type="hidden" name="id" value="' .$_GET['id']. '">
			<input type="submit" value="delete">
		</form>
	';
	$author = "<p>by {$article['name']}</p>";
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
		<a href="author.php">author</a>
    	<ol>
      		<?php print_list(); ?>
    	</ol>
    	<a href="create.php">create</a>
		<?= $update_link ?>
		<?= $delete_link ?>
    	<h2>
			<?php print_title(); ?>
		</h2>
    	<?php print_description(); ?>
		<?= $author ?>
  	</body>
</html>