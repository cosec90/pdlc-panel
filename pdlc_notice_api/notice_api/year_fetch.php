<?php
error_reporting(0);
header("Content-Type:application/json");
include '../notice_contoller/get_year.php';

$json = file_get_contents('php://input');
$obj = json_decode($json);

$year_var = $obj->year;
$course_var = $obj->course;

$response =array();

if(!empty($year_var) && !empty($course_var)){
    $result = GET_YEAR($year_var,$course_var);

    if(empty($result)){
        $response = $result;
        response(200,"No response","NULL");
    }
    else
    {
        if($result == "No notices found"){
            $response = $result;
            response(413,"No notices found",$response);
        }
        else
        {
            $response = $result;
            response(200,"Notices found",$response);
        }
    }
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