<?php
	
	try{
		$connection = new PDO('mysql:host=localhost;dbname=eschool','root','');
		$connection->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
		// echo ' connection established';
	}catch(Exception $e){
		die('ERR =>').$e->getMessage();
	}
?>