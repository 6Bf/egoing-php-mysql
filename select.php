<?php
require_once("connect_db.php");

$sql = "SELECT * FROM topic";
$result = mysqli_query($conn, $sql);

while( $row = mysqli_fetch_array($result) ) {
	echo $row['title'];
	echo $row['description'];
}
?>