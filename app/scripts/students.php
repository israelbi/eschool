<?php 
    require "./db.php";

    if (isset($_SERVER['HTTP_ORIGIN'])) {
        header("Access-Control-Allow-Origin: {$_SERVER['HTTP_ORIGIN']}");
        header('Access-Control-Allow-Credentials: true');
        header("Cache-Control: no-cache");
    }

    if ($_SERVER['REQUEST_METHOD'] == 'OPTIONS') {
        if (isset($_SERVER['HTTP_ACCESS_CONTROL_REQUEST_METHOD']))
            header("Access-Control-Allow-Methods: GET, POST, OPTIONS");
        if (isset($_SERVER['HTTP_ACCESS_CONTROL_REQUEST_HEADERS']))
            header("Access-Control-Allow-Headers: {$_SERVER['HTTP_ACCESS_CONTROL_REQUEST_HEADERS']}");
        exit(0);
    }

    if(isset($_GET['matricule']) && !empty($_GET['matricule'])){
        $student = $db->prepare("select * from students where matricule = '".$_GET['matricule']."' and status = 'active'");
        $student->execute();
        $student = $student->fetchAll();

        $studentValidPay = $db->query("select * from payment where student = '".$_GET['matricule']."' and status = 'active'")->fetchAll(PDO::FETCH_ASSOC);
        $studentInValidPay = $db->query("select * from payment where student = '".$_GET['matricule']."' and status = 'draft'")->fetchAll(PDO::FETCH_ASSOC);

        $data = [
            "information" =>$student,
            "validPayment" =>$studentValidPay,
            "InvalidPayment" => $studentInValidPay
        ];

        echo json_encode($data);
    }
?>