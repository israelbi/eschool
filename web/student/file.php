<?php 

        if(isset($_GET['folder']) and !empty($_GET['folder'])){
            $path = "./bills";
            $studentFolder = $path."/".$_GET['folder'];

            if(!file_exists($studentFolder)){
                if(mkdir($studentFolder,0777,true)){
                    echo "Student folder created !";
                 }
            }else{
                echo $studentFolder." Folder exists !";
            }
        }

?>