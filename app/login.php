<!DOCTYPE html>
<html>
<head>
	<title>login</title>
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
     				<h4>Log In</h4>
     			</div>
     			<div class="modal-body" style="padding: 40px 20px;">
     				<form method="POST" action="scripts/login.php">
     					<input type="text" name="username" class="input" placeholder="username">
     					<input type="password" name="password" class="input" placeholder="password">
     					<input type="submit" name="button" value="Log In" class="button">
     				</form>
     			</div>
     		</div>
     </div>
</body>
</html>
