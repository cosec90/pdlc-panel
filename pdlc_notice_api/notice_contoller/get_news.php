<?php
	include '../database_connection/connection.php';
	function GET_NOTICES($course,$year){
		include '../database_connection/connection.php';
		$query = "SELECT * from notice_tb where nt_year='$year' and nt_course='$course'";
		$result = mysqli_query($con,$query);
		$count = mysqli_num_rows($result);
		if($count > 0){
			$notice_data = mysqli_fetch_assoc($result);

			$return = $notice_data;
		}
		else{
			$return = "No notices found";
		}

		return $return;

	}

?>