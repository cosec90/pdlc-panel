<?php
    include '../controller/controller.php';
    if(!empty($_POST['value'])){
        $btnValue = $_POST['value'];
        $getFileName = GET_FILE_NAME($btnValue);
        if(file_exists($getFileName['nt_docPath'])){
            unlink($getFileName['nt_docPath']);
            $deleteNotice = DELETE_NOTICE($btnValue);
            echo "success";
        }
        else{
            $deleteNotice1 = DELETE_NOTICE($btnValue);
            echo "success";
        }
       
    }
    else {
        echo "error in php";
    }


?>