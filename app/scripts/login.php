<?php
	session_start();
	require 'db.php';
	require 'func.php';
	if(isset($_POST['button']))
	{
       if(!empty($_POST['username']) and ! empty($_POST['password']))
       {
       	   $data = array('username'=>protectData($_POST['username']),'password'=>protectData($_POST['password']));
       	   $query = "select * from staff where username = '".$data['username']."' and password = '".$data['password']."'";
       	   $user = $db->query($query)->fetch();
       	   $usero = $db->query($query)->rowCount();

       	 
       	   	  if($user['username'] == $data['username'] and $user['password'] == $data['password'])
       	   	  {
					$_SESSION['user'] = $user['matricule'];
					$_SESSION['isAllowed'] = $user['access'];
       	   	  		header('location:../academic.php?access='.$_SESSION['isAllowed']);
       	   	  }
       	   	  else
       	   	  {
       	   	  	   if($user == 1)
       	   	  	   {
							$_SESSION['user'] = $user['matricule'];
							$_SESSION['isAllowed'] = $user['access'];
       	   	  			header('location:academic.php?access='.$_SESSION['isAllowed']);
       	   	  	   }
       	   	  	   else
       	   	  	   {
       	   	  			header('location:../login.php?err=invalid');
       	   	  	   }
       	   	  		
       	   	  }
       	  
       }else{
       		header('location:../login.php?err=empty');
       }
	}

	if(isset($_POST['year']))
	{
		$_SESSION['academic'] = $_POST['academic'];
		header('location:../index.php');
	}
?>