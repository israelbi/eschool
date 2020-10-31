<?php
	function rollnumber()
	{
		require 'db.php';
		$count = $db->query('select * from students')->rowCount();
		if($count >= 0)
		{
			$recentyear  = date('Y');
			$recentmonth = date('m');
			$getrollnumber = $recentyear.$recentmonth;
			for($start = 0; $start <= $count ; $start++)
			{
                 $fullnumber=$getrollnumber.$start;
			}
			return $fullnumber;
		}
	}

	function protectData($data)
	{
		if($data != '')
		{
			$data = trim($data);
			$data = stripcslashes($data);
			$data = strip_tags($data);
			$data = htmlspecialchars($data);

			return $data;
		}
		else
		{
			$data = trim($data);
			$data = stripcslashes($data);
			$data = strip_tags($data);
			$data = htmlspecialchars($data);

			return $data;
		}
	}

	function addyear($year)
	{
		require 'db.php';
		try
			{
			$query = "insert into academic(year) values('".protectData($year)."')";
			if($db->query($query))
			{
				return '<p>New year Added</p>';
			}
			else
			{
               return '<p>Cannot add a year'.mysql_error().'</p>';
			}
		}catch(Exception $e)
		{
			die('error :').$e->getMessage();
		}
	}

	function addindb($query)
	{
		require 'db.php';
		return $db->query($query);
	}

	function CountNumber($class,$classtype)
	{
        require 'db.php';
		$classLs = $class;
		$section = $classtype;
		$query = "select * from students where class = '".$classLs."'and section = '".$section."' and academic = '".$_SESSION['academic']."' and status = 'active'";
		if($db->query($query))
		{
			return $db->query($query)->rowCount();
		}else{
			return '0';
		}
	}
?>