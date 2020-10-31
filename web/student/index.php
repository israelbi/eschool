<?php  
    session_start();
    require "../config/db.php";

    if(isset($_SESSION['user']) && $_SESSION['user'] == $_GET['id']){
        $student = $connection->prepare("select * from students where matricule = '".$_GET['id']."'");
        $student->execute();
        $student = $student->fetchAll();

        if(isset($_POST['validPay'])){

            $amount = $_POST['amount'];
            settype($amount,"double");

            $datePayement = $_POST['PDay'];
            $trimster = "";
            $purpose = "";
            $e = [];

            if($amount !== 0){
            try{

                //Check if the file is uploaded
              if( $_FILES['attachement']['error'] !== 4){

                  $file = basename($_FILES['attachement']['name']);

                 
                  $path = "./bills";
                  $studentFolder = $path."/".$_SESSION['user'];
      
                  //Check if Folder $studentFolder exists
                  if(file_exists($studentFolder)){

                         //   mkdir("./bills/".$_SESSION['user'],007)
                        $fullfile  = $studentFolder."/".$file;
                        $tmp = $_FILES['attachement']['name'];
                        
                        $size = ceil($_FILES['attachement']['size'] / pow(1024,2));
                        $mega = 4; //Megabytes required

                        $imageType =  pathinfo($file,PATHINFO_EXTENSION);
                        $requiredExtensios = ["jpg","jpeg","png","webp","gif","PNG"];

                         //Check the image Type if is in array of extensions
                            if(in_array($imageType,$requiredExtensios)){

                                //Check the size of the iamge 
                            if($size >= $mega){
                                array_push( $e,"Le fichier ne doit pas depasser 4 Mo!");
                            }else{

                                //if the file the uploaded file is downloaded
                                if(move_uploaded_file($_FILES['attachement']['tmp_name'],$fullfile)){


                                 //check if there is no error in $e
                                    if($_POST['purpose'] === "1"){
                                        $trimster = $_POST['trimester'];
                                        $purpose = "Tuition";
                                    }else{
                                        $trimster = "---";
                                        $purpose = $_POST['purpose'];
                                    }

                                   //check if there is no error in $e
                                   $bindedValues = array(
                                    "student" => $_SESSION['user'],
                                    "amount" => $amount,
                                    "trimester" => $trimster,
                                    "date"  => $datePayement,
                                    "fullyear"  => $_POST['year'],
                                    "purpose"=>$purpose,
                                    "file"=>$fullfile
                                );
                                if(count($e) === 0){
                                    $query = $connection->prepare("
                                    INSERT INTO payment (student,trimster,amount,date,academic,status,purpose,file)
                                    VALUES (:student,:trimester,:amount,:date,:fullyear,'draft',:purpose,:file)
                                    ");
                                    if($query->execute($bindedValues)){ }
                                }else{
                                    array_push($e,"impossible d'envoyer le formulaire");
                                }
                                    
                                    // array_push( $e,"Le fichier a éte telechargé  avec succes!");
                                }else{
                                    array_push( $e,"Le fichier n'a pas éte telechargé !");
                                }
                            }
                        }else{
                            array_push( $e,"Le fichier n'est  pas un fichier image valide !");
                        }
                   
           
                  }else{
                    //Attempt to create folder for each student
                    if(mkdir($studentFolder,0777,true)){
                           //   mkdir("./bills/".$_SESSION['user'],007)
                           $fullfile  = $studentFolder."/".$file;
                           $tmp = $_FILES['attachement']['name'];
                           
                           $size = ceil($_FILES['attachement']['size'] / pow(1024,2));
                           $mega = 4; //Megabytes required
   
                           $imageType =  pathinfo($file,PATHINFO_EXTENSION);
                           $requiredExtensios = ["jpg","jpeg","png","webp","gif","PNG"];
   
                            //Check the image Type if is in array of extensions
                               if(in_array($imageType,$requiredExtensios)){
   
                                   //Check the size of the iamge 
                               if($size >= $mega){
                                   array_push( $e,"Le fichier ne doit pas depasser 4 Mo!");
                               }else{
   
                                   //if the file the uploaded file is downloaded
                                   if(move_uploaded_file($_FILES['attachement']['tmp_name'],$fullfile)){
   

                                       //check if there is no error in $e
                                       if($_POST['purpose'] === "1"){
                                            $trimster = $_POST['trimester'];
                                            $purpose = "Tuition";
                                       }else{
                                           $trimster = "---";
                                           $purpose = $_POST['purpose'];
                                       }
                                       $bindedValues = array(
                                           "student" => $_SESSION['user'],
                                           "amount" => $amount,
                                           "trimester" => $trimster,
                                           "date"  => $datePayement,
                                           "fullyear"  => $_POST['year'],
                                           "purpose"=>$purpose,
                                           "file"=>$fullfile
                                       );
                                       if(count($e) === 0){
                                           $query = $connection->prepare("
                                           INSERT INTO payment (student,trimster,amount,date,academic,status,purpose,file)
                                           VALUES (:student,:trimester,:amount,:date,:fullyear,'draft',:purpose,:file)
                                           ");
                                           if($query->execute($bindedValues)){ }
                                       }else{
                                           array_push($e,"impossible d'envoyer le formulaire");
                                       }
                                   }else{
                                       array_push( $e,"Le fichier n'a pas éte telechargé !");
                                   }
                               }
                           }else{
                               array_push( $e,"Le fichier n'est  pas un fichier image valide !");
                           }   
                    }
                  }
              }else{
                  array_push( $e," Aucun fichier selectionné !");
              }
          }catch(PDOException $error){
              array_push( $e,$error->getMessage());
          }

        }else{
            array_push($e,"Invalid amount given !");
        }
    }
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../css/app.css">
    <title>Eschool | <?php echo $_SESSION['user'];?></title>
</head>
<body>

        <div class="App">
           <div class="header">
               <div class="brand">
                   <h4>Student UI</h4>
               </div>
               <div class="links">
                   <li>Payments</li>
                   <li>Notification</li>
                   <li><a href="./logout.php" class="logout">Log Out</a></li>
               </div>
           </div>
           <div class="container">
               <div class="leftmenu"></div>

                    <div class="doc">
                        <div class="head"></div>
                        <div class="form">
                            <div class="form-content">
                            <h4>Form Registration for Hight Cycle</h4>
                            <div id="registrationReport">
                            <?php 
                                if(isset($e)){
                                    if(count($e) > 0){
                                        $i = 0;
                                        while($i < count($e)){ 
                                            echo "<p>".$e[$i]."</p>";
                                            $i++;
                                        }
                                    }
                                }
                            ?>
                            </div>

                            <?php foreach ($student as $std):?>
                            <form id="registrationHuman" method="POST" enctype="multipart/form-data">
                                <div class="select">
                                    <input type="text"  placeholder="fname" class="input disabled"  value="<?php echo $std['fname'];?>" disabled>
                                    <input type="text"  placeholder="fname" class="input disabled ml-5"  value="<?php echo $std['lname'];?>" disabled>
                                </div>
                            
                            <input type="text"  placeholder="pseudo" class="input disabled"  value="<?php echo $std['pseudo'];?>" disabled>
                            <select class="input"  name="trimester" required>
                                <option value="" disabled selected> --- Please Select Trimster ----</option>
                                <option>1</option>
                                <option>2</option>
                                <option>3</option>
                            </select>
                            <input type="text"  placeholder="Amount paid" name="amount"  class="input" required>
                            <input type="text"  value="<?php $fullYear = date("Y") - 1 ."-".date("Y"); echo $fullYear;?>" class="input  disabled"   name="year">                       
                            <input type="date"  placeholder="Day Of Payment" class="input" name="PDay" required>
                            <select class="input"  name="purpose" required>
                                <option value="" disabled selected> --- Please Select Purpose ----</option>
                                <option >Registration</option>
                                <option value="1">Tuition</option>
                                <option>Syllabus</option>
                                <option>Retake</option>
                                <option>Special Exam(s)</option>
                                <option>Other fees</option>
                            </select>
                            <input type="file" id="file" class="" style="display:block;margin:8px 0px;" name="attachement" required>
                            <input type="submit" name="validPay" class="submit" value="validate">
                        </form>
                        </div>
                        <div class="reports">
                            <div class="box">
                                <h4>My Lastest Payments</h4>
                            </div>
                            <div class="box">
                                <?php $payments = $connection->query("select * from payment where student = '".$std['matricule']."' order by RegisterDate desc limit 0,10")->fetchAll();?>
                               <table>
                                   <thead>
                                       <tr>
                                           <th>ID</th>
                                           <th>Trimster</th>
                                           <th>Amount</th>
                                           <th>Purpose</th>
                                           <th>Date</th>
                                           <th>Status</th>
                                       </tr>
                                   </thead>
                                   <tbody>
                                       <?php foreach($payments as $payment):?>
                                            <tr>
                                                <td><?php echo "#".$payment['id'];?></td>
                                                <td><?php echo $payment['trimster'];?></td>
                                                <td><?php echo " $ ".$payment['amount'];?></td>
                                                <td><?php echo $payment['purpose'];?></td>
                                                <td><?php echo $payment['date'];?></td>
                                                <td><p class="pending"><?php echo $payment['status'];?></p></td>
                                            </tr>
                                        <?php endforeach;?>
                                   </tbody>
                               </table>
                            </div>
                        </div>
                    </div>
                    <?php endforeach; ?>
                </div>

           </div>
        </div>
    
</body>
</html>
<?php  }else{header("Location:../?request=login");} ?>