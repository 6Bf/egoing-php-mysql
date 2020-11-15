<?php
require_once("connect_db.php");
require_once("print_topic_items.php");
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
    	<form action="process_update.php" method="POST">
			<div><input type="hidden" name="id" value="<?= $_GET['id'] ?>" /></div>
    		<div><input type="text" name="title" placeholder="title" value="<?php print_title() ?>"></div><br/>
			<div><textarea name="description" placeholder="description"><?php print_description() ?></textarea></div><br/>
      		<div><input type="submit"></div>
    	</form>
	</body>
</html>