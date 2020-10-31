<?php
     session_start();
     if(isset($_SESSION['user']) and isset($_SESSION['academic'])){
          require 'scripts/db.php';
          $query = $db->query("select * from students where academic = '".$_SESSION['academic']."'");
 ?>
<!DOCTYPE html>
<html>
<head>
	<title>Students</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="main/main.css">
	<link rel="stylesheet" type="text/css" href="main/bootstrap.min.css">
     <link rel="stylesheet" type="text/css" href="main/font-awesome/css/font-awesome.min.css">
     <meta name="viewport" content="width=device-width,initial-scale=1.0" />
	 <script type="text/javascript" src="js/main.js"></script>
</head>
<body>
	 <div class="container-fluid">
	 	<?php require 'header.php'; ?>
          <?php require 'modals/students.php'; ?>
	 	<?php require 'modals/co.php'; require 'modals/humanity.php';?>
	 	<div class="center-container">
     		<?php require 'left.php'; ?>
     		<div class="menu-static">
     			<div class="header-info">
     				<h4 style="padding: 3px 10px;">Dashboard / Students</h4>
     			</div>
     			<div class="Registration-form">
     				<div class="classes">
                              <div class="class">
                                   <h4>3</h4>
                                   <h5>A</h5>
                                   <p><?php echo CountNumber(3,'A');?></p>
                                   <div class="class-over">
                                   <div class="o">
                                        <a href="students.php?class=3&&section=A">View list</a>
                                   </div>
                                   </div>
                              </div>
                              <div class="class">
                                   <h4>3</h4>
                                   <h5>B</h5>
                                   <p><?php echo CountNumber(3,'B');?></p>
                                   <div class="class-over">
                                   <div class="o">
                                        <a href="students.php?class=3&&section=B">View list</a>
                                   </div>
                                   </div>
                              </div>   
                              <div class="class">
                                   <h4>3</h4>
                                   <h5>C</h5>
                                   <p><?php echo CountNumber(3,'C');?></p>
                                   <div class="class-over">
                                   <div class="o">
                                        <a href="students.php?class=3&&section=C">View list</a>
                                   </div>
                                   </div>
                              </div>
                              <div class="class">
                                   <h4>3</h4>
                                   <h5>D</h5>
                                   <p><?php echo CountNumber(3,'D');?></p>
                                   <div class="class-over">
                                   <div class="o">
                                        <a href="students.php?class=3&&section=D">View list</a>
                                   </div>
                                   </div>
                              </div>
                              <div class="class">
                                   <h4>3</h4>
                                   <h5>E</h5>
                                   <p><?php echo CountNumber(3,'E');?></p>
                                   <div class="class-over">
                                   <div class="o">
                                        <a href="students.php?class=1&&section=E">View list</a>
                                   </div>
                                   </div>
                              </div>
                         </div>
     			</div>
                    <div class="Registration-form">

                    </div>


                    <div class="pagination" >
                         <div class="pagination-a">
                               <a href="students.php" class="page-link">1</a>
                              <a href="studentspage.php" class="page-link">2</a>
                              <a href="humanity.php" class="page-link activeLink">Humanity</a>
                         </div>
                    </div>   	
     		</div>
     	</div>
	 </div>
      <?php 
          if(isset($_GET['class'])){
     ?>
          <script type="text/javascript">
               displayElement('record');
          </script>
     <?php          
          }
      ?>
</body>
</html>
<?php
     }else{header('location:login.php');}
 ?>