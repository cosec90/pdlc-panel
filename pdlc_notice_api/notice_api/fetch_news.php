<?php
error_reporting(0);
header("Content-Type:application/json");
include '../notice_contoller/get_notice.php';

$json = file_get_contents('php://input');
$obj = json_decode($json);

$year_var = $obj->year;
$course_var = $obj->course;

$response =array();

if(!empty($year) && !empty($course)){
    $result = GET_NOTICES($course_var,$year_var);

    if(empty($result)){
        $response = $result;
        response(200,"User data not found",NULL);
    }
    else{
        $response = $result;
        response(200,"Notices",$response);
    }
}
else{

}

function response($status,$status_message,$data)
{
	header("HTTP/1.1 ".$status);
	
// 	$response['status']=$status;
// 	$response['status_message']=$status_message;
	$response=$data;
	
	$json_response = json_encode($response);
 	echo $json_response;
}
?>