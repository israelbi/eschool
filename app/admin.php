<?php
     session_start();

     if(isset($_SESSION['user']) and isset($_SESSION['academic'])){
         require "./scripts/db.php";
         $users = $db->query("select * from staff where status = 'active'")->fetchAll();

         if(isset($_POST['sendFormAccess'])){

            if(isset($_POST['access'])){
               $access = strtolower($_POST['access']);
               
               $user = intval($_GET['user']);

               $db->query("update staff set access = '".$access."' where matricule = '". $user."'");
               header("location:./admin.php?access=set");
            }     
        }

        $connected= $db->query("select * from staff where matricule = '".$_SESSION['user']."' and status = 'active'")->fetch();

        if(isset($_POST['sendPassword'])){
            $newpwd = $_POST['newpassword'];
            $retypepwd = $_POST['retypepassword'];
            $user = $_POST['userid'];

            if($newpwd === $retypepwd){
                if($db){
                    try{
                        $req = $db->query('UPDATE staff SET password = "'.$retypepwd.'" WHERE matricule = "'.$user.'" ');
                        $req->execute();
                        header("location:?user=".$_SESSION['user']."&&perfomed_action=is_success");
                    }catch(PDOException $e){
                        echo "ERROR => ".$e->getMessage();
                    }
                }
            }else{
                header("location:?user=".$_SESSION['user']."&&action=pwd_change&&uid=".$user."&e=password doesn't match");
            }
        }
?>
<html lang="en">
<head>
    <title>Eschool | Draft</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="./main/main.css">
    <link rel="stylesheet" type="text/css" href="./main/bootstrap.min.css">
    <meta name="viewport" content="width=device-width,initial-scale=1.0" />
	<link rel="stylesheet" type="text/css" href="./main/font-awesome/css/font-awesome.min.css">
	 <script type="text/javascript" src="./js/main.js"></script>
</head>
<body>
<div class="container-fluid">
        <?php require 'header.php'; ?>
        <?php 
			if(isset($_GET['user']) and ! isset($_GET['action'])){
				require './modals/userAccess.php';
            }
            if(isset($_GET['action'])){
                require './modals/userPwd.php';
            }
		?>
        <div class="center-container">
     		<?php require 'left.php'; ?>
     		<div class="menu-static">
     			<div class="recent">
     				<div class="recent-table">
                        <div class="userAdmin">
                            <div class="userImage">
                                <img src="../web/src/IMG_1390.JPG"/>
                            </div>
                            <div class="userData">
                                <h4> <div class="actif"></div><?php echo $connected['fname']." ". $connected['lname']." ". $connected['username'];?></h4>
                                <small class="task">Gestionnaire de paie</small>
                            </div>
                         </div>
                         <div class="listUsers">
                             <h4>Dashboard / System users / All</h4>
                             <div style="">
                                <a href="" class="btn btn-sm border text-secondary">create</a>
                             </div>
                         </div>
                         <div class="listUserContainer">
                             <?php  foreach($users as $staff):?>
                             <div class="userAdmin border">
                            <div class="userImage">
                                <img src="../web/src/IMG_1390.JPG"/>
                            </div>
                            <div class="userData w-33">
                                <h4> <div class="actif"></div><?php echo $staff['fname']." ". $staff['lname']." ". $staff['username'];?></h4>
                                <p class="task">
                                    <span class="fa fa-building"></span>
                                    <?php echo $staff['function'];?>
                                </p>
                                <small>
                                    <span class="fa fa-phone"></span>
                                    + 250 780095206,+243 975305612
                                </small>
                                <div>
                                    <div style="text-align:right;margin-top:5px;display:inline-block">
                                        <a href="?user=<?php echo $staff['matricule'];?>&&action=pwd_change&uid=<?php echo $staff['matricule'];?>" class="btn-sm btn border" style="color:#555">Password</a>
                                    </div>
                                    <div style="text-align:right;margin-top:5px;display:inline-block;">
                                        <a href="?user=<?php echo $staff['matricule'];?>" class="btn-sm btn border" style="color:#555">settings</a>
                                    </div>
                                </div>
                            </div>
                         </div>
                            <?php endforeach;?>
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