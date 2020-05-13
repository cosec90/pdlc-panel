<?php
    if(isset($_POST['btnUpload'])){
        $fileName= $_FILES['file']['name'];
        echo $fileName;
    }
    else {
        echo "main error";
    }
 // $query ="SELECT * from notice_tb where nt_id=6";
        // $result = mysqli_query($con,$query);
        // $count = mysqli_num_rows($result);
        // if($count > 0){
        //     $row = mysqli_fetch_assoc($result);
        //     $example = $row['nt_docPath'];
        //     $title = $row['nt_title'];
        //     echo "<a href='$example'>$title</a>"; 
        // }  
?>