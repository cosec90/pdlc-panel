<?php
    session_start();
    if (isset($_POST["btnOtp"])){
        $otpEntered =$_POST["otpField"];
        if($otpEntered == $_SESSION["userOtp"]){
            // Add the change password page and redirect to it.
            echo "<script>
                alert('OTP entered successfully');
                location.href='../views/changePassword.php';            
            </script>";
            
        }
        else{
            session_unset();
            echo "<script>
                    alert('Please enter the correct OTP');
                    location.href=' ../views/changePassword.php';                  
                </script>";
               
                
            //redirect to the forgot_password.html file to again enter the email for otp verification
        }
    }
    else{
        echo "error";
        // window.location.href=' ../views/changePassword.php'; 
    } 
?>  