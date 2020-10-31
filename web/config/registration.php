<?php
 require "./db.php";
 require "./func.php";

 if (isset($_SERVER['HTTP_ORIGIN'])) {
     header("Access-Control-Allow-Origin: {$_SERVER['HTTP_ORIGIN']}");
     header('Access-Control-Allow-Credentials: true');
     header("Cache-Control: no-cache");
 }
 // Access-Control headers are received during OPTIONS requests
 if ($_SERVER['REQUEST_METHOD'] == 'OPTIONS') {
     if (isset($_SERVER['HTTP_ACCESS_CONTROL_REQUEST_METHOD']))
         header("Access-Control-Allow-Methods: GET, GET, OPTIONS");
     if (isset($_SERVER['HTTP_ACCESS_CONTROL_REQUEST_HEADERS']))
         header("Access-Control-Allow-Headers: {$_SERVER['HTTP_ACCESS_CONTROL_REQUEST_HEADERS']}");
     exit(0);
 }


    if(empty($_GET['fname']) || empty($_GET['lname']) || empty($_GET['pseudo']) || empty($_GET['bday']) || empty($_GET['ldn']))
    {
       echo "all fieds are required !";
    }
    else
    {
        $GET = array('fn'=>protectData($_GET['fname']),
                      'ln'=>protectData($_GET['lname']),
                      'ps'=>protectData($_GET['pseudo']),
                      'bday'=>protectData($_GET['bday']),
                      'ldn'=>protectData($_GET['ldn']),
                      'class'=>protectData($_GET['class']),
                      'section'=>protectData($_GET['section']), 
                      'sex'=>protectData($_GET['sex']),
                      'rollnumber' =>rollnumber(),
                      'academic'=>$_GET['academic'],
                      'division'=>$_GET['division']
            );
        $query = "INSERT INTO students (fname,lname,pseudo,bday,sex,class,section,ldn,matricule,academic,option,status) VALUES ('".$GET['fn']."','".$GET['ln']."','".$GET['ps']."','".$GET['bday']."','".$GET['sex']."','".$GET['class']."','".$GET['section']."','".$GET['ldn']."','".$GET['rollnumber']."','".$GET['academic']."','".$GET['division']."','draft')";
        addindb($query);
        echo "Registration completed !";
    }


?>