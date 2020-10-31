<?php
     session_start();
     if(isset($_SESSION['user']) and isset($_SESSION['academic'])){

		require "./scripts/db.php";

		if(isset($_POST['validateSTUD'])){
			$studId = $_POST['studId'];

			try {
				//code...
				$db->query("update students set status = 'active' where matricule = '".$studId."'");
				header("location:inscription.php?registration=success");
			} catch (PDOException $th) {
				echo "E: ".$th->getMessage();
			}
		}
         
          $query = $db->query("select * from students where academic = '".$_SESSION['academic']."' and status = 'draft' ");
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
	 <script type="text/javascript" src="js/main.js"></script>
</head>
<body>
	 <div class="container-fluid">
	 	<?php require 'header.php'; ?>
		 <?php require 'modals/co.php'; require 'modals/humanity.php';?>
		 <?php 
			if(isset($_GET['student'])){
				require './modals/confirm.php';
			}
		?>
	 	<div class="center-container">
     		<?php require 'left.php'; ?>
     		<div class="menu-static">
     			<div class="header-info">
     				<h4 style="padding: 3px 10px;">Dashboard / Student Registration</h4>
     			</div>
     			<div class="Registration-form">
     				<div class="form-registration">
     					<a class="button text-white" onclick="displayElement('co');">C.O</a>
     					<a class="button text-white" onclick="displayElement('humanity')">Humanity</a>
                              <a onclick="printEl('list');" class="button text-white">print</a>
     				</div>
     			</div>

     			<div class="recent">
     						<div class="recent-text" style="background-color: transparent;">
     							<h4>Lastest inscriptions</h4>
     						</div>
     						<div class="recent-table">
     						<div style="height: 420px;overflow-y: scroll;">
                                   <div id="list">
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
                                                       <th>Option</th>
     									</tr>
     								</thead>
     								<tbody>
     									
											 <?php foreach($query as $row):?>
											
												 <tr>
													<td><a href="?student=<?php echo $row['matricule'];?>">#<?php echo $row['id'];?></a></td>
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