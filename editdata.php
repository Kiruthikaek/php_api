<?php

	include 'conn.php';
	
	$id = $_POST['id'];
	$Name = $_POST['Name];
	$Description = $_POST['Description'];
	$RAM = $_POST['RAM'];
	$Processor = $_POST['Processor'];
	$Type = $_POST['Type'];
	
	$connect->query("UPDATE product SET Name='".$Name."', Description='".$Description."', RAM='".$RAM."', Processor='".$Processor."',Type='".$Type."' WHERE id=". $id);

?>