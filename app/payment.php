<?php
     session_start();
     if(isset($_SESSION['user']) and isset($_SESSION['academic'])){
          require 'scripts/db.php';
          $query = $db->query("select * from students where academic = '".$_SESSION['academic']."' and status = 'active' ");
          if(isset($_GET['act'])){$action = $_GET['act'];}else{$action = "";}

          //remove a payment if wanted
          if(isset($_GET['remove'])):
               $db->query("delete from payment where id = '".$_GET['remove']."'");
               //redirect
                    header("location:payment.php?itemRemoved=".$_GET['remove']);
          endif
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
     <style>
          #purposeSelect{
               background-color: #0079bb80;
               color: #fff;
               padding: 3px 5px;
               border:1px solid #efefef;
          }
     </style>
	 <script type="text/javascript" src="js/main.js"></script>
</head>
<body>

          <!-- show action if header contains action -->
          <?php if(isset($_GET['action']) and $_GET['action'] == "delete"): ?>
          <div class="modalShow" id="delete_lecturer" style="display:block;">
               <span class="closing" onclick="HideElement('delete_lecturer');">&times;</span>
               <div class="modalShowBox">
                    <div class="modal-header " id="clb" style="background-color: #007baa;">
                         <p>Are sure you Want to delete ?</p>
                    </div>
                    <div class="modal-body">
                         <div class="text-center" style="width:50%;margin:auto;padding:20px;">
                              <a href="payment.php" class="link btn btn btn-success btn-sm">No</a>
                              <a href="payment.php?remove=<?php echo $_GET['id'];?>" class="link btn btn btn-danger btn-sm">continue</a>
                         </div>
                    </div>
                    <div>
                    </div>
               </div>
          </div>
          <?php endif;?>
          <!-- end of first action -->


          <!-- show message when item deleted -->
          <?php if(isset($_GET['itemRemoved'])):?>
          <div class="modalShow" id="delete_lecturer" style="display:block;">
               <span class="closing" onclick="HideElement('delete_lecturer');">&times;</span>
               <div class="modalShowBox" style="width:30%;">
                    <div class="modal-header " id="clb" style="background-color: #007baa;">
                         <p>Report of Deletion</p>
                    </div>
                    <div class="modal-body">
                         <div class="text-center" style="width:80%;margin:auto;padding:20px;">
                             <h4>Successfuly Deleted !</h4>
                             <p>See you next time.</p>
                         </div>
                    </div>
                    <div class="modal-footer">
                         <small>Copyright &copy; yourcompany. <?php echo date('Y');?></small>
                    </div>
                    <div>
                    </div>
               </div>
          </div>
          <?php endif;?>

          <!-- perform the edition of a payment -->
          <?php if(isset($_GET['action']) and $_GET['action'] == "edit"):?>
               <!-- ask for perfimission by password authentification -->
               <div class="modalShow" id="delete_lecturer" style="display:block;">
               <span class="closing" onclick="HideElement('delete_lecturer');">&times;</span>
               <div class="modalShowBox" style="width:35%;">
                    <div class="modal-header " id="clb" style="background-color: #007baa;">
                         <p>Edition Authentification</p>
                    </div>
                    <div class="modal-body">
                         <div class="text-center" style="width:100%;margin:auto;padding:20px;">
                             <h4>Please provide Us The password</h4>
                              <form action="scripts/main.php" method="POST">
                              <input type="hidden" name="id" value="<?php echo $_GET['id']; ?>">
                                   <input type="password" name="pwd" id="" placeholder="pwd: mypassword here" class="input">
                                   <input type="submit" value="send password" class="button" name="check_pwd">
                              </form>
                         </div>
                    </div>
                    <div class="modal-footer">
                         <small>Copyright &copy; yourcompany. <?php echo date('Y');?></small>
                    </div>
                    <div>
                    </div>
               </div>
          </div>
          <?php endif;?>

          <!-- if access is denied -->
          <?php 
               if(isset($_GET['access']) and $_GET['access'] == "denied"):
                    require('modals/denied.php');
               endif;
          ?>

           <!-- if access is allowed -->
           <?php 
           if(isset($_GET['access']) and $_GET['access'] == "allowed"):
               require('modals/access.php');
           endif;
           ?>

           <!-- show success message after a succes operation -->
           <?php 
               if(isset($_GET['action']) and $_GET['action'] == "okay"):
                    require('modals/success.php');
               endif;
          ?>
     


	 <div class="container-fluid">
	 	<?php require 'header.php'; ?>
          <?php require 'modals/students.php'; ?>
	 	<?php 
               require 'modals/pay.php';

               if(isset($_GET['section']) and $_GET['section'] == 'C.O')
               {
                   require'modals/inorder.php'; 
              }elseif (isset($_GET['section']) and $_GET['section'] == 'humanity') {
                   require'modals/hum.php';
              }
               
               require 'modals/choice.php';
           ?>
	 	<div class="center-container">
     		<?php require 'left.php'; ?>
     		<div class="menu-static">
     			<div class="header-info">
     				<h4 style="padding: 3px 10px;">Dashboard / Payment</h4>
                         <div style="margin-top: -38px;margin-right:10px;float:right">
                              <select  id="purposeSelect" onchange="changePayment(this)">
                                   <option value="">-- Select Type ---</option>
                                   <?php
                                        $purposes = $db->query("select distinct purpose from payment")->fetchAll();
                                        foreach($purposes as $purpose):
                                   ?>
                                 
                                   <option  ><?php echo $purpose['purpose'];?></option>
                                   <?php endforeach;?>
                              </select>
                         </div>
                    </div>
                    

               <?php switch ($action) {
                    case 'view_all_payment':
                    $views = $db->query("select * from payment where academic = '".$_SESSION['academic']."' and status = 'active'");
               ?>
               <!-- view all payment-->
               <div class="Registration-form">
                       <div>
                            <div>
                                 <h4>All Payments</h4>
                            </div>
                            <div class="payment-table">
                                 <div style="height:338px;overflow-y:scroll;margin-bottom:12px;border-bottom:1px solid #f1f1f1;">
                                 <table class="table table-bordered table-hover">
                                             <thead>
                                                  <tr>
                                                       <th>id</th>
                                                       <th>student</th>
                                                       <th>amount</th>
                                                       <th>Trimester</th>
                                                       <th>Date</th>
                                                       <th>Options</th>
                                                  </tr>
                                             </thead>
                                             <tbody>
                                                  
                                             <?php foreach($views as $row):?>
                                                  <tr>
                                                       <td><?php echo $row['id'];?></td>
                                                       <td><?php echo $row['student'];?></td>
                                                       <td><?php echo $row['amount'];?></td>
                                                      <td><?php echo $row['trimster'];?></td>
                                                      <td><?php echo $row['date'];?></td>
                                                      <td>
                                                           <a href="payment.php?action=delete&id=<?php echo $row['id'];?>" class="button text-white bg-danger" style="border:none;"><span class="fa fa-remove"></span></a>
                                                           <a href="payment.php?action=edit&id=<?php echo $row['id'];?>" class="button text-white">
                                                                <span class="fa fa-edit"></span>
                                                           </a>
                                                            <a href="payment.php?action=remove&id=<?php echo $row['id'];?>" class="button text-white" style="margin-left: 10px;margin-right: -55px;">
                                                                <span class="fa fa-print"></span>
                                                           </a>
                                                      </td>
                                                  </tr>
                                             <?php endforeach;?>
                                             </tbody>
                                        </table>
                                 </div>
                            </div>
                       </div>

               <?php
                         break;
                    case 'sort_by':
                    require("modals/sortPayment.php")
               ?>
                <!-- sort payment-->

                <?php
                         break;
                    case '1':
                    require("modals/sort_1.php")
               ?>

               <?php
                         break;
                    case '2':
                    require("modals/sort_2.php")
               ?>

               <?php
                    break;
                    default:
               ?>
                       <!---- Show Payements By Categories --->
                       <?php if(isset($_GET['paymentType']) and !empty($_GET['paymentType'])){?>
                                <!-- view recent payments-->
                <div class="Registration-form">
                       <div>
                            <div>
                                 <h4>Lastest <?php echo str_replace("_"," ",$_GET['paymentType']);?> Payments</h4>
                            </div>
                            <div class="payment-table" id="list">
                                 <table class="table table-bordered table-hover">
                                             <thead>
                                                  <tr>
                                                       <th>id</th>
                                                       <th>student</th>
                                                       <th>amount</th>
                                                       <th>Trimester</th>
                                                       <th>Status</th>
                                                       <th>Date</th>
                                                       <th>Options</th>
                                                  </tr>
                                             </thead>
                                             <tbody>
                                                  
                                             <?php 
                                                  $myPaid = $db->query("select * from payment where status = 'active' and academic = '".$_SESSION['academic']."' and purpose = '".str_replace("_"," ",$_GET['paymentType'])."'order by RegisterDate desc limit 0,10")->fetchAll();
                                                  foreach($myPaid as $row):
                                             ?>
                                                  <tr>
                                                       <td><?php echo $row['id'];?></td>
                                                       <td><?php echo $row['student'];?></td>
                                                       <td><?php echo $row['amount'];?></td>
                                                      <td><?php echo $row['trimster'];?></td>
                                                      <td><?php echo $row['status'];?></td>
                                                      <td><?php echo $row['date'];?></td>
                                                      <td>
                                                           <a href="payment.php?action=delete&id=<?php echo $row['id'];?>" class="button text-white bg-danger" style="border:none;"><span class="fa fa-remove"></span></a>
                                                           <a href="payment.php?action=edit&id=<?php echo $row['id'];?>" class="button text-white">
                                                                <span class="fa fa-edit"></span>
                                                           </a>
                                                            <a href="payment.php?action=remove&id=<?php echo $row['id'];?>" class="button text-white" style="margin-left: 10px;margin-right: -55px;">
                                                                <span class="fa fa-print"></span>
                                                           </a>
                                                      </td>
                                                  </tr>
                                             <?php endforeach;?>
                                             </tbody>
                                        </table>
                            </div>
                       </div>

                       <?php }else{ ?>
                                <!-- view recent payments-->
                <div class="Registration-form">
                       <div>
                            <div>
                                 <h4>Lastest payment (Confirmed)</h4>
                            </div>
                            <div class="payment-table">
                                 <table class="table table-bordered table-hover">
                                             <thead>
                                                  <tr>
                                                       <th>id</th>
                                                       <th>student</th>
                                                       <th>amount</th>
                                                       <th>Trimester</th>
                                                       <th>Status</th>
                                                       <th>Date</th>
                                                       <th>Options</th>
                                                  </tr>
                                             </thead>
                                             <tbody>
                                                  
                                             <?php 
                                                  $myPaid = $db->query("select * from payment where status = 'active' and academic = '".$_SESSION['academic']."' order by RegisterDate desc limit 0,10")->fetchAll();
                                                  foreach($myPaid as $row):
                                             ?>
                                                  <tr>
                                                       <td><?php echo $row['id'];?></td>
                                                       <td><?php echo $row['student'];?></td>
                                                       <td><?php echo $row['amount'];?></td>
                                                      <td><?php echo $row['trimster'];?></td>
                                                      <td><?php echo $row['status'];?></td>
                                                      <td><?php echo $row['date'];?></td>
                                                      <td>
                                                           <a href="payment.php?action=delete&id=<?php echo $row['id'];?>" class="button text-white bg-danger" style="border:none;"><span class="fa fa-remove"></span></a>
                                                           <a href="payment.php?action=edit&id=<?php echo $row['id'];?>" class="button text-white">
                                                                <span class="fa fa-edit"></span>
                                                           </a>
                                                            <a href="payment.php?action=remove&id=<?php echo $row['id'];?>" class="button text-white" style="margin-left: 10px;margin-right: -55px;">
                                                                <span class="fa fa-print"></span>
                                                           </a>
                                                      </td>
                                                  </tr>
                                             <?php endforeach;?>
                                             </tbody>
                                        </table>
                            </div>
                       </div>
                       <?php } ?>

               <?php
                         break;
               }?>



     			
                <?php if($action ==  1 || $action == 2){$style = "margin:50px 0px;border:1px solid #f1f1f1;padding:10px 10px;";} ?>
                        <div class="form-registration" style="width: 100%;<?php echo $style; ?>">
                              <div class="left-align">
                                   <a class="button text-white" onclick="displayElement('pay');">new payment</a>
                                   <a class="button text-white" onclick="displayElement('choice')">in order</a>
                                   <a onclick="printEl('list');" class="button text-white">print</a>
                              </div>
                              <div class="right-align">
                              <a href="payment.php?act=view_all_payment" class="button text-white btn-success">
                                   <span class="fa fa-eye"></span> View All payments
                              </a>
                              <a class="button text-white " href="payment.php?act=sort_by" style="margin-left:5px;">
                              <span class="fa fa-search"></span> Search By
                         </a>
                              </div>
                         </div>

                    </div> 

                     	
     		</div>
     	</div>
	 </div>

               <!-- display all payment by sorting by date -->
               <?php 
                    if(isset($_GET['search_date'])){
                         //protect the data from url
                          $date = htmlspecialchars($_GET['search_date']);
                          $paids = $db->query("select * from payment where date = '".$date."' and academic = '".$_SESSION['academic']."' and status = 'active' ")->rowCount();
                          $views =  $db->query("select * from payment where date = '".$date."' and academic = '".$_SESSION['academic']."' status = 'active'");
                         //verfiy if the date has corresponding payment
                         if($paids > 0){
                              //we call the file that holds data
                              require 'modals/date.php';
                         }else{
               ?>
                    <!-- no result found messsage -->
                    <div class="modalShow" id="sortDate" style="display:block">
                         <span class="closing" onclick="HideElement('sortDate');">&times;</span>
                         <div class="modalShowBox" style="margin: 5% auto;">
                              <div class="modal-header " id="clb" style="background-color: #007baa;">
                                   <p>Sorting Report</p>
                              </div>
                              <div class="modal-body text-center">
                                   <h1 class="text-danger">404</h1>
                                   <h4>Request Not Found !</h4>
                              </div>
                              <div>
                              </div>
                         </div>
                    </div>

               <?php
                         }
                    }
               ?>

               <!-- display all payment of a specific month of the year -->
               <?php 
                    if(isset($_GET['search_'])){
                         //protect the data from url
                          $month = htmlspecialchars($_GET['month']);
                          $year = htmlspecialchars($_GET['year']);
                          $paids = $db->query("select * from payment where month = '".$month."'  and academic = '".$_SESSION['academic']."' and status = 'active'")->rowCount();
                          $views =  $db->query("select * from payment where month = '".$month."'  and academic = '".$_SESSION['academic']."'  and status = 'active'");
                         //verfiy if the date has corresponding payment
                         if($paids > 0){
                              //we call the file that holds data
                              require 'modals/date_2.php';
                         }else{
               ?>
                    <!-- no result found messsage -->
                    <div class="modalShow" id="sortDate" style="display:block">
                         <span class="closing" onclick="HideElement('sortDate');">&times;</span>
                         <div class="modalShowBox" style="margin: 5% auto;">
                              <div class="modal-header " id="clb" style="background-color: #007baa;">
                                   <p>Sorting Report</p>
                              </div>
                              <div class="modal-body text-center">
                                   <h1 class="text-danger">404</h1>
                                   <h4>Request Not Found !</h4>
                              </div>
                              <div>
                              </div>
                         </div>
                    </div>

               <?php
                         }
                    }
               ?>



     <?php 
               if(isset($_POST['inorder']))
          {
               if(!empty($_POST['paid']) and !empty($_POST['class']))
               {
                    $amnt = $_POST['paid'];
                    $class = $_POST['class'];
                    $condition = $_POST['cond'];
                    $section = $_POST['sec'];

                    switch ($condition) {
                         case 'over':
                              $paid = "select * from payment,students where students.class= '".$class."' and payment.student = students.matricule  and students.section = '".$section."' and payment.amount > '".$amnt."' and payment.status = 'active'";
                              break;
                         case 'under':
                              $paid = "select * from payment,students where students.class= '".$class."' and payment.student = students.matricule  and students.section = '".$section."' and payment.amount < '".$amnt."'and payment.status = 'active' ";
                              break;
                         case 'minimum':
                              $paid = "select * from payment,students where students.class= '".$class."' and payment.student = students.matricule  and students.section = '".$section."' and payment.amount >= '".$amnt."' and payment.status = 'active'";
                              break;
                         default:
                              break;
                    }
                   
               }
               $newpaid = $db->query($paid);
               require'modals/inorders.php';
          }

            if(isset($_POST['inorder2']))
          {
               if(!empty($_POST['paid2']) and !empty($_POST['class2']))
               {
                    $amnt = $_POST['paid2'];
                    $class = $_POST['class2'];
                    $condition = $_POST['cond2'];
                    $section = $_POST['sec2'];

                    switch ($condition) {
                         case 'over':
                              $paid = "select * from payment,students where students.class= '".$class."' and payment.student = students.matricule  and students.section = '".$section."' and payment.amount > '".$amnt."' and payment.status = 'active'";
                              break;
                         case 'under':
                              $paid = "select * from payment,students where students.class= '".$class."' and payment.student = students.matricule  and students.section = '".$section."' and payment.amount < '".$amnt."' and payment.status = 'active'";
                              break;
                         case 'minimum':
                              $paid = "select * from payment,students where students.class= '".$class."' and payment.student = students.matricule  and students.section = '".$section."' and payment.amount >= '".$amnt."' and payment.status = 'active'";
                              break;
                         default:
                              break;
                    }
                   
               }
               $newpaid = $db->query($paid);
               require'modals/inorders.php';
          }
     ?>

      <?php 
          if(isset($_GET['class'])){
     ?>
          <script type="text/javascript">
               displayElement('record');
          </script>
     <?php          
          }
      ?>

      <?php if(isset($_GET['student']) && !empty($_GET['student'])){require "./modals/tudentDOC.php";}?>
         

      <script src="js/main.js" type="text/javascript"></script>
</body>
</html>
<?php
     }else{header('location:login.php');}
 ?>