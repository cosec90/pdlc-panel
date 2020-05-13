<?php
    session_start();
    include '../controller/controller.php';

    if(isset($_POST['btnUpload'])){
        $fileName= $_FILES['file']['name'];
        $fileErrors = $_FILES['file']['error'];
        $fileSize =$_FILES['file']['size'];
        $fileTmp= $_FILES['file']['tmp_name'];
        $fileType = $_FILES['file']['type'];
        $goodExtensions = array('.docx','.doc','.pdf','.jpg','.jpeg','.png');
        $uploadDir = '../uploads/';
        $maxFile= 7340032;
        $stem = substr($fileName,0,strpos($fileName,'.'));
        $extension = substr($fileName,strpos($fileName,'.'),strlen($fileName)-1);
        $uploadFile =$uploadDir.$stem.$extension;
        $fileTitle= $_POST['title'];
        $noticeState= $_POST['state'];
        $year =$_POST['year'];
        $courseDet= $_POST['courseName'];
        $description = $_POST['description'];
        $creationDate = date("Y-m-d");
        $explodeName = explode(".",$fileName);
        // $revisedName = $explodeName[0];
        $revisedName = $stem.$extension;
       
       
        if(!in_array($extension, $goodExtensions)){
            echo "<script> 
            alert('Invalid file extension'); 
            document.location.href='../views/index.php?invlaid_extension';
            </script>"; 
        }
        else if( $fileSize > $maxFile){
            echo "<script> 
            alert('File size is too large');
            document.location.href='../views/index.php?max_file_size_reached';
            </script>"; 
        }
        else{
            $checkTitle = CHECKTITLE($fileTitle);
            if($checkTitle == 0){
                $checkName = CHECKNAME($revisedName);
                if($checkName == 1){
                    echo "<script> alert('File name already in use. Please rename the file.');
                        location.href = '../views/index.php?invalid_filename';
                </script>";
                }
                else{
                   
                    $upload = UPLOAD($fileTitle,$description, $creationDate,$uploadFile,$noticeState,$revisedName,$year,$courseDet);
                    move_uploaded_file($fileTmp,$uploadFile);
                }
            }
            else{
                echo "<script>
                alert('Title already taken');
                location.href= '../views/index.php?error';
                </script>";
            }   
        }
    }

?>