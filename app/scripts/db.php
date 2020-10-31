<?php
	
	try{
		$db = new PDO('mysql:host=localhost;dbname=eschool','root','');
		$db->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
		// echo ' connection established';
	}catch(Exception $e){
		die('ERR =>').$e->getMessage();
	}
?>