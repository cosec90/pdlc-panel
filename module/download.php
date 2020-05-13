<?php
    include '../controller/controller.php';
    if(isset($_POST['btnDownload'])){
        $id = $_POST['id'];
        $download = DOWNLOAD($id);
    }
    else{
        echo "some error";
    }



?>