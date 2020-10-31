<?php
		require 'db.php';
		require 'func.php';
		 $Students = $db->query("select * from students where academic = '".$_SESSION['academic']."'")->rowCount();
         $CO = $db->query("select * from students where academic = '".$_SESSION['academic']."' and option='C.O'")->rowCount();
         $humanity = $db->query("select * from students where academic = '".$_SESSION['academic']."' and option='humanity'")->rowCount();
         if(isset($_GET['class']) and isset($_GET['section']))
         {
         	$info = $db->query("select  * from students where academic = '".$_SESSION['academic']."' and class='".$_GET['class']."' and section = '".$_GET['section']."'"); 
         }

         $paid = $db->query("select * from payment where academic = '".$_SESSION['academic']."' ORDER BY date ASC limit 0,7");
         $lect = $db->query("select * from lecturers  ORDER BY age ASC limit 0,6");

         $lects = $db->query("select * from lecturers ")->rowCount();
         define('TODAY', date("d-m-Y"));
         
         $paid_toDay = $db->query("select * from payment where  academic = '".$_SESSION['academic']."' and date ='".TODAY."'")->rowCount();

         
?>