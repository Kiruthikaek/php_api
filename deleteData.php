<?php
	include 'conn.php';
	$id=$_POST['id'];
	$connect->query("DELETE FROM product WHERE id=".$id);

?>