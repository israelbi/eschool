<?php
	//Demare la session
	 session_start();
	 
	// verifier si les sessions sont assigneess
    if(isset($_SESSION['user']) and isset($_SESSION['academic'])){

		//inclure le module de la connection a la base de donnee.
		require "./scripts/db.php";

		//object qui garde les donnees  de la requette pour lses paiments en brouillon
		$query = $db->query(
			"
				select 
					students.fname,
					students.lname,
					students.pseudo,
					students.matricule,
					students.class,
					students.section,
					payment.amount,
					payment.student,
					students.academic,
					payment.date,
					payment.RegisterDate,
					payment.id,
					payment.status
				from
					payment,
					students
				where
					students.academic = '".$_SESSION['academic']."'
				and
					students.matricule = payment.student
				and
					payment.status   = 'draft'
			"
		)->fetchAll();
 ?>
<html lang="en">
<head>
    <title>Eschool | Draft</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="./main/main.css">
	<link rel="stylesheet" type="text/css" href="./main/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="./main/font-awesome/css/font-awesome.min.css">
	 <script type="text/javascript" src="./js/main.js"></script>
</head>
<body>
    <div class="container-fluid">
        <?php require 'header.php'; ?>
        <?php 
			if(isset($_GET['pid'])){
				require './modals/confirm_pay.php';
			}
		?>
        <div class="center-container">
     		<?php require 'left.php'; ?>
     		<div class="menu-static">
     			<div class="header-info">
     				<h4 style="padding: 3px 10px;">Dashboard / Payments / Draft</h4>
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
                                             <th>matricule</th>
     										<th>fname</th>
     										<th>lname</th>
     										<th>pseudo</th>
     										<th>class</th>
                                            <th>Amount</th>
                                            <th><span class="paymentdate">Payment Date</span></th>
											<th>Registration date</th>
     									</tr>
     								</thead>
     								<tbody>
     									
											 <?php foreach($query as $row):?>
											
												 <tr>
													<td><a href="?pid=<?php echo $row['id'];?>">#<?php echo $row['id'];?></a></td>
                                                    <td><?php echo $row['matricule'];?></td>
                                                    <td><?php echo $row['fname'];?></td>
													<td><?php echo $row['lname'];?></td>
													<td><?php echo $row['pseudo'];?></td>
												
													<td><?php echo $row['class']."/".$row['section'];?></td>
												
												
                                                    <td><?php echo "$ ".$row['amount'];?></td>
                                                    <td><?php echo $row['date'];?></td>
													<td><?php echo $row['RegisterDate'];?></td>
													
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
	<script src="./js/main.js" type="text/javascript"></script>
</body>
</html>
<?php
     }else{header('location:login.php');}
 ?>