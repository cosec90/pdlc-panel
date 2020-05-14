<?php

 session_start();
function LOGIN($user,$pwd,$cour,$depart){   
  include '../config/connection.php';
  $pass = md5($pwd);
  $query="SELECT * FROM admin_tb WHERE ad_username='$user'and ad_password='$pass' and ad_courseDept='$cour' and ad_collegeDept ='$depart'" ;
  $result=mysqli_query($con,$query);
  if(mysqli_num_rows($result) > 0){
    $row = mysqli_fetch_assoc($result);
    $adminDetails = $row;
    return $adminDetails;
  }
  else { 
    header("Location: ../views/Login.php?error=LoginFailed");
  }
 }
 function CHECKNAME($title){
  include '../config/connection.php';
  $query="SELECT * from notice_tb where nt_filename = '$title'";
  $result = mysqli_query($con,$query);
  $count = mysqli_num_rows($result);
  $counter = 0;
  if($count > 0){
    $counter++;
    return $counter;
  }
  return $counter;
 }
//  function INSERTNAME($title){
//   include '../config/connection.php';
//   $query ="INSERT into filename_tb values (not null,'$title')";
//   $result = mysqli_query($con,$query); 
//  }
 function CHECKTITLE($title){
  include '../config/connection.php';
  $query= "SELECT nt_title from notice_tb where nt_title='$title'";
  $result = mysqli_query($con,$query);
  $count = mysqli_num_rows($result);
  $flag = 0;
  if($count > 0){
    $flag++;
    return $flag;
  }
  return $flag;
 }
 function UPLOAD($title,$des,$date,$path,$state,$filename,$class,$cour){ 
  include '../config/connection.php';
  $query="INSERT into notice_tb values (not null,(SELECT ad_id from admin_tb where ad_username='".$_SESSION['adminDetail']."'),'$title','$des','$date','$path','$state','$filename','$class','$cour')";
  $result =mysqli_query($con,$query);
  header("Location: ../views/index.php?successfullyentered");
 }
 function SEND_MAIL($mail){
  include '../config/connection.php';
  $query = "SELECT * FROM `admin_tb` WHERE ad_email= '$mail'";
  $result= mysqli_query($con,$query);
  if(mysqli_num_rows($result) > 0){
    $row = mysqli_fetch_assoc($result);
    $username= $row['ad_username'];
    $password = $row['ad_password'];
    return "success";
  }
  else{
    echo "failed";
  }
 }
 function DELETE_NOTICE($id){
  include '../config/connection.php';
  $query= "DELETE from notice_tb where nt_id='$id';";
  $result=mysqli_query($con,$query); 
 }
 function GET_FILE_NAME($id){
  include '../config/connection.php';
  $query = "SELECT nt_docPath, nt_filename from notice_tb where nt_id='$id';";
  $result = mysqli_query($con,$query);
  $count = mysqli_num_rows($result);
  $error ="error";
  if($count > 0){
    $row = mysqli_fetch_assoc($result);
    $info = $row;
    return $info;
  }
  else{
    return $error;
  }
 }
 function DOWNLOAD($notice_id){
  include '../config/connection.php';

  $sql = "SELECT * from notice_tb where nt_id = '$notice_id'";
  $result = mysqli_query($con,$sql);

  if(mysqli_num_rows($result) > 0){
    $notice_result = mysqli_fetch_assoc($result);
    $file= $notice_result['nt_filename'];
    $path = $notice_result['nt_docPath'];
    header("Cache-Control: public");
    header("Content-Description: File Transfer");
    header("Content-Disposition: attachment; filename=$file");
    header("Content-Type: application/zip");
    header("Content-Transfer-Encoding: binary");
    readfile($path);
    

  }

 }
 function ADD_NEWS($tit,$msg){
  include '../config/connection.php';
   $date =date('y-m-d');
   $course_name = $_SESSION['adminCourse'];

  $sql = "INSERT into news_tb values(not null,'$course_name','$msg','$tit','$date')";
  $result = mysqli_query($con,$sql);

  header("Location: ../views/index.php");

 }
 function UPDATE_NEWS($key,$tit,$msg){
  include '../config/connection.php';
  $date =date('y-m-d');

  $sql = "UPDATE news_tb set nw_msg='$msg',nw_title='$tit',nw_date='$date' where nw_id='$key'";
  $result = mysqli_query($con,$sql);
  unset($_SESSION['course_id']);
  header("Location: ../views/index.php");
 }
 function DELETE_NEWS($key){
  include '../config/connection.php';

  $sql = "DELETE from news_tb where nw_id='$key'";
  $result = mysqli_query($con,$sql);
  header("Location: ../views/index.php");
 }

?>