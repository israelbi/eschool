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

    if(isset($_GET['msg']) && isset($_GET['name']) && isset($_GET['email'])){
       if(!empty($_GET['msg']) && !empty($_GET['name']) && !empty($_GET['email'])){
           $q = $connection->prepare("insert into contact(name,email,message) values (
                                '".htmlspecialchars($_GET['name'])."',
                                '".htmlspecialchars($_GET['email'])."',
                                '".htmlspecialchars($_GET['msg'])."')
                                ");
            $q->execute();
            echo "Merci de nous avoir contacter !";
       }
    }

?>