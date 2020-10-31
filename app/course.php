<?php
	session_start();
	if(isset($_SESSION['user']) and isset($_SESSION['academic'])){
		include 'scripts/db.php';
	//GET ALL INSCRIPTIONS
	$insribed = $db->query("select * from course  where type = 'humanity'");

 ?>
<!DOCTYPE html>
<html>
<head>
	<title>Settings</title>
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
        <?php require 'modals/course.php'; ?>
     			<div class="center-container">
     				<?php require 'left.php'; ?>
     				<div class="menu-static">

     					<div class="recent">
     						<div class="recent-text">
     							<h4>Courses List / humanity</h4>
     						</div>
     						<div class="recent-table">
     						<div style="height: 300px;overflow-y: scroll;">
     							<table class="table table-bordered table-hover">
     								<thead>
     									<tr>
     										<th>id</th>
     										<th>title</th>
     										<th>hours</th>
     										<th>Lecturer</th>
     									</tr>
     								</thead>
     								<tbody>
     								<!-- display all inscriptions -->
     								<?php foreach($insribed as $row):?>
     									<tr>
     										<td><?php echo $row['id'];?></td>
     										<td><?php echo $row['name'];?></td>
     										<td><?php echo $row['hours'];?></td>
     										<td>
                                                <?php echo $row['lecturer'];?>
                                             </td>
     										
     									</tr>
     								<?php endforeach;?>
     								</tbody>
     							</table>
                                </div>
     						</div>
                             <div class="recent-table">
                             <button onclick="displayElement('course')">
                                <span class='fa fa-plus button'> new course</span>
                             </button>
                             </div>
     					</div>

     				</div>
     			</div>
     		</div>
     </div>
     <script src="js/main.js"></script>
</body>
</html>
<?php
 }else{header('location:login.php');}
 ?>