<?php

	include 'conn.php';
	
	$id = $_POST['id'];
	$Name = $_POST['Name'];
	$Description = $_POST['Description'];
	$RAM = $_POST['RAM'];
	$Processor = $_POST['Processor'];
	$Type = $_POST['Type'];
	
	$connect->query("INSERT INTO product (Name,Description,RAM,Processor,Type) VALUES ('".$Name."','".$Description."','".$RAM."','".$Processor."','".$Type."')");

?>