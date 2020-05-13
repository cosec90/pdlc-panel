<?php
    session_start();

    if(isset($_SESSION['adminDetail'])){
        session_destroy();
        header("Location: ../views/Login.php");
    }

?>