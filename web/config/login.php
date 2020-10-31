<?php 
        session_start();
        
        require "./db.php";
        require "./func.php";

        $isRegistered = false;
        $student = $connection->prepare("select * from students where matricule = '".protectData($_GET['id'])."' and fname='".protectData($_GET['pwd'])."'");
        $student->execute();
        $student = $student->rowCount();

        if($student == 1){
            $isRegistered = true;
        }

        if($isRegistered){
            $_SESSION['user'] = $_GET['id'];
            echo "1";
        }else{
            echo "0";
        }
?>