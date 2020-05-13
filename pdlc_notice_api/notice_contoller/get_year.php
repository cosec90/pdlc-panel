<?php
	function GET_YEAR($year,$course){
		include '../database_connection/connection.php';
		// $query = "SELECT * from `notice_tb` where `nt_year`='$year' and nt_course='$course'";
		// $result = mysqli_query($con,$query);
		// $count = mysqli_num_rows($result);
		// if($count > 0){
		// 	while($row = mysqli_fetch_assoc($result))
		// 	{	
		// 		$notice_data[] = $row;
		// 	}
		// }
		// else{
		// 	$notice_data = "No notices found";
		// } 
		// return $notice_data;

		$query = "SELECT * from notice_tb where nt_course='$course'";
		$result = mysqli_query($con,$query);
		$count = mysqli_num_rows($result);
		if($count > 0){
			$sql="SELECT * from notice_tb where nt_year='all' or nt_year='$year'";
			$result2 = mysqli_query($con,$sql);
			$count2 = mysqli_num_rows($result2);

			if($count2 > 0){
				while($row= mysqli_fetch_assoc($result2)){
					$notice_data[] = $row;
				}
			}
			else{
				$notice_data = "No notices found";
			}
		}
		return $notice_data;







	}

?>