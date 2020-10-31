<?php
     session_start();
     if(isset($_SESSION['user']) and isset($_SESSION['academic'])){
          require 'scripts/db.php';
          $query = $db->query("select * from students where academic = '".$_SESSION['academic']."'");

          //remove item from db
          if(isset($_GET['remove'])){
               if(!$_GET['remove'] == "true"){
                    //redirect to main page
                    header("location:lecturer.php");
               }else{
                    if($_GET['remove'] == 'true'){
                         //Get the identification
                         $id_lecturer = htmlspecialchars($_GET['user']);
                         //delete from db
                         $delete_query = $db->query("delete from lecturers where no = '".$id_lecturer."'");
                         header("location:lecturer.php");
                    }
               }
          }

 ?>
<!DOCTYPE html>
<html>
<head>
  <title>Students</title>
  <meta charset="utf-8">
  <link rel="stylesheet" type="text/css" href="main/main.css">
  <link rel="stylesheet" type="text/css" href="main/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="main/font-awesome/css/font-awesome.min.css">
   <script type="text/javascript" src="js/main.js"></script>
</head>
<body>
   <div class="container-fluid">
    <?php require 'header.php'; ?>
    <?php 
          if(isset($_GET['action'])){
              if($_GET['action'] == "remove"){
                    require 'modals/delete.php';
              }
          }
    ?>
          <div class="center-container">
        <?php require 'left.php'; ?>
        <?php require 'modals/addlect.php'; ?>
        <?php require 'modals/choice2.php'; ?>
        <div class="menu-static">
          <div class="header-info">
            <h4 style="padding: 3px 10px;">Dashboard / Lectures</h4>
          </div>
          <?php 
               if(isset($_GET['section']) and $_GET['section'] == 'C.O')
               {
                   require'modals/addlect.php';
          ?>
          <script type="text/javascript">
            displayElement('addlect');
          </script> 
          <?php
              }elseif (isset($_GET['section']) and $_GET['section'] == 'humanity') {
                   require'modals/addlect2.php';
          ?>
          <script type="text/javascript"> displayElement('addlect2'); </script>
          <?php
              }
          ?>
          
                    <div class="Registration-form">
                       <div>
                            <div>
                                 <h4>Recorded Lecturers</h4>
                            </div>
                            <div class="payment-table">
                                 <table class="table table-bordered table-hover">
                                             <thead>
                                                  <tr>
                                                       <th>id</th>
                                                       <th>no</th>
                                                       <th>fname</th>
                                                       <th>lname</th>
                                                       <th>class</th>
                                                       <th>section</th>
                                                       <th>salaire</th>
                                                       <th>age</th>
                                                       <th>sex</th>
                                                       <th>Options</th>
                                                  </tr>
                                             </thead>
                                             <tbody>
                                                  
                                             <?php foreach($lect as $row):?>
                                                  <tr>
                                                       <td><?php echo $row['id'];?></td>
                                                       <td><?php echo $row['no'];?></td>
                                                       <td><?php echo $row['fname'];?></td>
                                                      <td><?php echo $row['lname'];?></td>
                                                      <td><?php echo $row['class'];?></td>
                                                      <td><?php echo $row['section'];?></td>
                                                       <td><?php echo $row['salaire'];?></td>
                                                      <td><?php echo $row['age'];?></td>
                                                      <td><?php echo $row['sex'];?></td>
                                                      <td>
                                                           <a href="lecturer.php?action=remove&&user=<?php echo $row['no'];?>" class="button text-white bg-danger" style="border:none;"><span class="fa fa-remove"></span></a>
                                                           <a href="lecturer.php?action=edition" class="button text-white">
                                                                <span class="fa fa-edit"></span>
                                                           </a>
                                                           
                                                      </td>
                                                  </tr>
                                             <?php endforeach;?>
                                             </tbody>
                                        </table>
                            </div>
                       </div>
                        <div class="form-registration" style="width: 100%;">
                              <a class="button text-white" onclick="displayElement('choice2');">new lecturer</a>
                         
                             
                              
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