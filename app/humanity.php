<?php
     session_start();
     if(isset($_SESSION['user']) and isset($_SESSION['academic'])){
          require 'scripts/db.php';
          $query = $db->query("select * from students where academic = '".$_SESSION['academic']."' and status = 'active'");
          $option = $db->query("select distinct section from students where students.option = 'humanity'");

 ?>
<!DOCTYPE html>
<html>
<head>
	<title>Students</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="main/main.css">
     <link rel="stylesheet" type="text/css" href="main/bootstrap.min.css">
     <meta name="viewport" content="width=device-width,initial-scale=1.0" />
	<link rel="stylesheet" type="text/css" href="main/font-awesome/css/font-awesome.min.css">
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
                              <form  method="POST" action="" id="form">
                              <span class="" id="error"></span>
                                   <input type="number" name="class_no" placeholder="class" class="input w-30" id="class">
                                   <select class="input w-30" name="section">
                                   <?php foreach ($option as $value):?>
                                        <option><?php echo $value['section']?></option>
                                   <?php endforeach;?>
                                   </select>
                                   <input type="submit" name="search_student" class="input w-20" value="search">
                              </form>
                         </div>
     			</div>
                    <div class="" >
                       <!-- check for avaible classe -->
                         <?php if(isset($_POST['search_student'])){
                              if(!empty($_POST['class_no'])){
                                   $class = $_POST['class_no'];
                                   $section = $_POST['section'];
                                   $students = $db->query("select * from students where class='".$class."' and section='".$section."' and academic = '".$_SESSION['academic']."' and status = 'active'");

                                   if($students->rowCount() > 0){
                                        $classes = $students;
                                      
                                        require 'modals/search.php';
                                   }else{
                                        require 'modals/notfound.php';
                                   }
                              }else{
                         ?>
                              <!-- Message for Empty Fields -->
                              <div class="btn-block">
                                   <div class="alert alert-secondary" width="100%">
                                        <p>Class is required !</p>
                                   </div>
                              </div>
                         <?php
                              }
                         }
                    ?>
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
      <script type="text/javascript">
    
      </script>
</body>
</html>
<?php
     }else{header('location:login.php');}
 ?>