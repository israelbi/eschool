<?php 

        require "./db.php";

        if (isset($_SERVER['HTTP_ORIGIN'])) {
            header("Access-Control-Allow-Origin: {$_SERVER['HTTP_ORIGIN']}");
            header('Access-Control-Allow-Credentials: true');
            header("Cache-Control: no-cache");
        }
        // Access-Control headers are received during OPTIONS requests
        if ($_SERVER['REQUEST_METHOD'] == 'OPTIONS') {
            if (isset($_SERVER['HTTP_ACCESS_CONTROL_REQUEST_METHOD']))
                header("Access-Control-Allow-Methods: GET, POST, OPTIONS");
            if (isset($_SERVER['HTTP_ACCESS_CONTROL_REQUEST_HEADERS']))
                header("Access-Control-Allow-Headers: {$_SERVER['HTTP_ACCESS_CONTROL_REQUEST_HEADERS']}");
            exit(0);
        }
    
        $email = stripslashes($_GET['email']);
        if(!empty($email)){

            if(!filter_var($email,FILTER_VALIDATE_EMAIL)){
                echo "Email n'est pas validde !";
            }else{

                $isRegistered = "";

                $check = $connection->query("select email from newsletter where email = '".$email."'")->rowCount();

                if($check > 0){
                   echo "Cet email est déjà en usage !";
                }else{
                    $insert = $connection->prepare("insert into newsletter(email) values ('".$email."')");
                    $insert->execute();
                    echo "Souscription terminée !";
                }
              
            }
        }else{
            echo "Entrer une addresse email ! ";
        }
?>