<?php
	session_start();
	if(isset($_SESSION['user']) and isset($_SESSION['academic'])){
		include 'scripts/db.php';
	//GET ALL INSCRIPTIONS
	$insribed = $db->query("select * from students  where academic ='".$_SESSION['academic']."'");

 ?>
<!DOCTYPE html>
<html>
<head>
	<title>Settings</title>
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
     			<div class="center-container">
     				<?php require 'left.php'; ?>
     				<div class="menu-static">

     					<div class="recent">
     						<div class="recent-text">
     							<h4>Lectures list</h4>
     						</div>
     						<div class="recent-table">
     						<div style="height: 250px;overflow-y: scroll;">
     							<table class="table table-bordered table-hover">
     								<thead>
     									<tr>
     										<th>id</th>
     										<th>fname</th>
     										<th>lname</th>
     										<th>pseudo</th>
     										<th>Bday</th>
     										<th>sex</th>
     										<th>class</th>
     										<th>section</th>
     										<th>ldn</th>
     										<th>matricule</th>
     										<TH>Option</TH>
     									</tr>
     								</thead>
     								<tbody>
     								<!-- display all inscriptions -->
     								<?php foreach($insribed as $row):?>
     									<tr>
     										<td><?php echo $row['id'];?></td>
     										<td><?php echo $row['fname'];?></td>
     										<td><?php echo $row['lname'];?></td>
     										<td><?php echo $row['pseudo'];?></td>
     										<td><?php echo $row['bday'];?></td>
     										<td><?php echo $row['sex'];?></td>
     										<td><?php echo $row['class'];?></td>
     										<td><?php echo $row['section'];?></td>
     										<td><?php echo $row['ldn'];?></td>
     										<td><?php echo $row['matricule'];?></td>
     										<td><?php echo $row['option'];?></td>
     									</tr>
     								<?php endforeach;?>
     								</tbody>
     							</table>
                                </div>
     						</div>
     					</div>

     				</div>
     			</div>
     		</div>
     </div>
</body>
</html>
<?php
 }else{header('location:login.php');}
 ?>