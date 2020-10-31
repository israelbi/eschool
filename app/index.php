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
	<meta name="viewport" content="width=device-width,initial-scale=1.0" />
	<link rel="stylesheet" type="text/css" href="main/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="main/font-awesome/css/font-awesome.min.css">
</head>
<body>
     <div class="container-fluid" id='mCon'>
        <?php require 'header.php'; ?>
     			<div class="center-container">
     				<?php require 'left.php'; ?>
     				<div class="menu-static">
     					<div class="header-info">
     						<h4>Dashboard</h4>
     					</div>
     					<div class="boxes">
     						<div class="box">
     							<div class="left">
     								<span class="fa fa-user"></span>
     							</div>
     							<div class="right">
     								<p>34</p>
     							</div>
     						</div>
     						<div class="box">
     							<div class="left">
     								<span class="fa fa-dollar"style="padding:5px 15px;"></span>
     							</div>
     							<div class="right">
     								<p>34</p>
     							</div>
     						</div>
     						<div class="box">
     							<div class="left">
     								<span class="fa fa-user"></span>
     							</div>
     							<div class="right">
     								<p>34</p>
     							</div>
     						</div>
     						<div class="box">
     							<div class="left">
     								<span class="fa fa-automobile" style="font-size: 35px;padding: 9px 8px;"></span>
     							</div>
     							<div class="right">
     								<p>34</p>
     							</div>
     						</div>
     					</div>

     					<div class="recent">
     						<div class="recent-text">
     							<h4>Lastest inscriptions</h4>
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
	 <?php if(isset($_GET['student']) && !empty($_GET['student'])){require "./modals/studentDOC.php";}?>
	 <script src="./js/main.js" type="text/javascript"></script>
</body>
</html>
<?php
 }else{header('location:login.php');}
 ?>