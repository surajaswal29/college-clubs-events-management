<?php 
    include "master.php";
    // include "header.php";

    if(isset($_POST['submit'])){
        $inputOTP = intval($_POST['otp']);

        if($_SESSION['otp'] === $inputOTP){
            $verify_user = "UPDATE `users` SET `verified` = '1' WHERE `reg_id` = '{$_SESSION['reg_id']}'";
            $verify_user_query = mysqli_query($conn,$verify_user);
            if($verify_user_query){
                echo "<script> alert('User Verified Successfully!') </script>";
                redirect('club-join-registration.php');
            }          
        }else{            
                echo "<script> alert('Incorrect OTP❌-User Not Verified') </script>";
            }       
    }
?>
    <div class="container">
        <div class="row">
            <div class="col-md-12 d-flex justify-content-center mt-5">
                <div class="otp-form rounded">
                    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post" class="form">
                        <span class="text-success" style="font-size:12px">An OTP has been sent to your email address (<strong><?php echo $_SESSION['email_address']; ?></strong>)</span>
                        <br>
                        <label for="otp" class="mt-2">Verify Otp</label>
                        <input type="number" name="otp" id="otp" class="form-control"/>
                        <button type="submit" class="btn btn-success mt-3" name="submit">Submit</button>
                        
                    </form>
                </div>
            </div>
        </div>
    </div>

<?php
    // include "footer.php";
?>