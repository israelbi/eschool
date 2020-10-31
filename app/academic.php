<?php 
     session_start();
     require 'scripts/db.php';
     $query = $db->query("select distinct year from academic");
 ?>
<!DOCTYPE html>
<html>
<head>
	<title>Academic</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="main/main.css">
	<link rel="stylesheet" type="text/css" href="main/bootstrap.min.css">
	<meta name="viewport" content="width=device-width,initial-scale=1.0" />
	<link rel="stylesheet" type="text/css" href="main/font-awesome/css/font-awesome.min.css">
	 <script type="text/javascript" src="js/main.js"></script>
</head>
<body>
     <div class="container-fluid">
     		<div class="login">
     			<div class="modal-header" id="clb">
     				<h4>Select The Year</h4>
     			</div>
     			<div class="modal-body" style="padding: 40px 20px;">
     				<form method="POST" action="scripts/login.php">
     					<select name="academic" class="input">
                              <?php foreach($query as $row){?>
                                   <option><?php echo $row['year']?></option>
                              <?php } ?>
                              </select>
     					<input type="submit" name="year" value="work on" class="button">
     				</form>
     			</div>
     		</div>
     </div>
</body>
</html>
