<?php 
	
	require 'views/userinsert.view.php';
	if (isset($_POST['submit'])){
		$insert = $database->insert();
	}

	require 'views/users.view.php';
	if (isset($_POST['submit'])){
		$delete = $database->delete();
	}

 ?>