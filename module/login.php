<?php

include '../controller/controller.php';
if(isset($_POST['btnSubmit'])){
    $username= $_POST['username'];
    $password= $_POST['pwd'];
    $departName = $_POST['departName']; 
    $courseName = $_POST['courseName'];
    $result= LOGIN($username, $password,$courseName, $departName);   
    if(!empty($result)){
        session_start();
        $_SESSION['adminDetail'] = $result['ad_username']; 
        $_SESSION['adminId'] = $result['ad_id'];
        $_SESSION['adminCourse'] = $result['ad_courseDept'];
        $course_dept = $result['ad_courseDept'];
        header("Location: ../views/index.php?course=$course_dept");
    }
    else{
        echo "<script> alert('Invalid credentials')
                location.href='../views/Login.php?wrong_credentials';
             </script>";
    }
}
else {
    header("Location: ../views/Login.php?button_unset");
}
?>