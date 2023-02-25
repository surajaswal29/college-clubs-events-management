<?php 
//Import PHPMailer classes into the global namespace
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

//Load Composer's autoloader
require 'vendor/autoload.php';

include "master.php";

      if(isset($_POST['submit'])){

        $regId = 'HNB'.date('Y').rand(1000,9999); //Student ID Generation
        $otpGeneration = rand(1000,9999);

        $firstName = $_POST['fname'];
        $lastName = $_POST['lname'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];
        $dept = $_POST['department'];
        $course = $_POST['course'];
        $year = $_POST['year'];
        $sem = $_POST['semester'];
        $roll_no = $_POST['roll_no'];
        // $club=$_POST['club'];
        $social = $_POST['social'];
        $aoi = $_POST['aoi'];
        $password = password_hash($_POST['password'],PASSWORD_DEFAULT);
        $date = date('Y-m-d');

        // $token = bin2hex(random_bytes(16));

        // Create an instance; passing `true` enables exceptions
        $mail = new PHPMailer(true);

          // Server settings
          $mail->SMTPDebug = false;                      //Enable verbose debug output
          $mail->isSMTP();                                            //Send using SMTP
          $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
          $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
          $mail->Username   = 'councilandclubs@gmail.com';                     //SMTP username
          $mail->Password   = 'bxnadwfyrehaqchr';                               //SMTP password
          $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
          $mail->Port       = 465;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`
      
          // Recipients
          $mail->setFrom('councilandclubs@gmail.com', 'HNBGU Clubs and Socities');
          $mail->addAddress($email, $firstName.''.$lastName);     //Add a recipient

          $mail->isHTML(true);                                  //Set email format to HTML
          $mail->Subject = 'User Email Verification';
          $mail->Body    = '
          <div>
            <h1>HNBGU Clubs & Socities</h1>
            </br>
            <h3>Hello, '.$firstName.' '.$lastName.'</h3>
            <h6>Verify Email Address</h6>
            <p>Your OTP is: '.$otpGeneration.'</p>
            </br>
            <p>Thanks & Regards</p>
            <p>HNBGU Clubs</p>
          </div>';
          // $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';
      
          // $to = $email;
          // $subject = "Email Verification";
          
          // $message = "
          // <html>
          // <head>
          // <title>Email Verification</title>
          // </head>
          // <body>
          // <p>Click on the link provided below to verify your email address and submit your application form.</p>
          // <a href='http://localhost/hnbgu-councils-clubs/verification?regid=".$regId."'>Click Here</a>
          // </body>
          // </html>
          // ";
          
          // // Always set content-type when sending HTML email
          // $headers = "MIME-Version: 1.0" . "\r\n";
          // $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
          
          // // More headers
          // $headers .= 'From: <saswal086@gmail.com>' . "\r\n";

        $sql_1 = "SELECT * FROM users WHERE email = '{$email}'";
        $output_1 = mysqli_query($conn,$sql_1);

        if(mysqli_num_rows($output_1)>0){
          echo "<script>alert('User already exist!')</script>";

        }else{
        
          if($mail->send()){
            $sql = "INSERT INTO `users` 
                    ( `reg_id`, `firstname`, `lastname`, `email`, `phone`, `department`, `year`, `semester`, `roll_no`, `course`, `social`, `aoi`, `password`, `verified`, `date`) 
                    VALUES 
                    ('{$regId}', '{$firstName}', '{$lastName}', '{$email}', '{$phone}','{$dept}','{$year}','{$sem}','{$roll_no}','{$course}','{$social}','{$aoi}', '{$password}',0, '{$date}')";
            $result = mysqli_query($conn,$sql);  

            if($result){
              $_SESSION['user_name'] = $firstName;
              $_SESSION['email_address'] = $email;
              $_SESSION['reg_id'] = $regId;
              $_SESSION['otp']=$otpGeneration;
              $_SESSION['course']=$course;
              $_SESSION['joiner_name'] = $firstName.' '.$lastName;
              redirect('verifyemail.php');
            }else{
              die();
            }
          }else{
            echo "Error Message";
          }
          
        }
      // } catch (Exception $e) {
          // echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
      // }

        
    }
?>
    <div class="form-wrap">
      <div class="container shadow">
        <div class="row">
          <div class="col-md-12 m-0 p-0 form-heading">
            <h1 class="btn-block">User Registration Form</h1>
          </div>
        </div>
        <div class="row justify-content-center align-items-center display-none" id="signup">
          <div class="col-md-12">
            <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post" class="form p-md-5">
                <!-- Firstname and Lastname -->
                <div class="row">
                  <div class="col-md-6 mt-3 mt-3">
                    <label for="username"
                      >Firstname<span class="imp-op">*</span></label
                    >
                    <input required type="text" name="fname" class="form-control" />
                  </div>
                  <div class="col-md-6 mt-3 mt-3">
                    <label for="username"
                      >Lastname<span class="imp-op">*</span></label
                    >
                    <input required type="text" name="lname" class="form-control" />
                  </div>
                </div>
                <!-- Email and Phone -->
                <div class="row">
                  <div class="col-md-6 mt-3">
                    <label for="email"
                      >Email<span class="imp-op">*</span></label
                    >
                    <input required type="text" name="email" class="form-control" />
                  </div>
                  <div class="col-md-6 mt-3">
                    <label for="phone"
                      >Contact Number<span class="imp-op">*</span></label
                    >
                    <input required type="number" name="phone" class="form-control" />
                  </div>
                  <!-- <input required type="text" class="form-control"> -->
                </div>

                <!-- Department, Clubs, Roll No -->
                <div class="row">
                  <div class="col-md-4 mt-3">
                    <label for="password">Department<span class="imp-op">*</span></label>
                    <select name="department" id="depart" class="form-control">
                      <option value="00">Select Department</option>
                      <option value="Department of Computer Science & Engineering">
                        Computer Science & Engineering
                      </option>
                      <option value="Department of Electronic and Communication Engineering">
                        Electronic and Communication Engineering
                      </option>
                      <option value="Department of Instrumentation Engineering">
                      Instrumentation Engineering
                      </option>
                      <option value="Department of Mechanical Engineering">
                        Mechanical Engineering
                      </option>
                      <option value="Department of Information Technology">
                      Information Technology
                      </option>
                      <option value="Others">
                      Others
                      </option>
                    </select>
                  </div>
                  <div class="col-md-2 mt-3">
                      <label for="password">Course<span class="imp-op">*</span></label>
                      <input type="text" class="form-control" name="course">
                  </div>
                  <div class="col-md-1 mt-3">
                    <label for="password">Year<span class="imp-op">*</span></label>
                    <select name="year" id="year" class="form-control">
                      <option value="1">1</option>
                      <option value="2">2</option>
                      <option value="3">3</option>
                      <option value="4">4</option>
                    </select>
                  </div>
                  <div class="col-md-1 mt-3">
                    <label for="password">Semester<span class="imp-op">*</span></label
                    >
                    <select name="semester" id="semester" class="form-control">
                      <option value="1">1</option>
                      <option value="2">2</option>
                      <option value="3">3</option>
                      <option value="4">4</option>
                      <option value="5">5</option>
                      <option value="6">6</option>
                      <option value="7">7</option>
                      <option value="8">8</option>
                      <!-- <option value="9">9</option>
                      <option value="10">10</option> -->
                    </select>
                  </div>
                  <div class="col-md-4 mt-3">
                    <label for="council">Roll Number
                      <span class="imp-op">*</span>
                    </label>
                    <input type="number" class="form-control" name="roll_no">
                  </div>
                  <!-- <input required type="text" class="form-control"> -->
                </div>

                <!-- Social media link & Area of Interest -->
                <div class="row">
                  <div class="col-md-6 mt-3">
                    <label for="Social">Social Media Link
                      <span class="imp-op">(optional)</span>
                    </label>
                    <input type="url" name="social" class="form-control" />
                  </div>
                  <div class="col-md-6 mt-3">
                    <label for="aoi">Area of Interest
                      <span class="imp-op">(optional)</span></label>
                    <input name="aoi" id="aoi" class="form-control" />
                  </div>
                </div>

                <!-- Password & confirm password -->
                <div class="row">
                  <div class="col-md-6 mt-3">
                    <label for="password">Password<span class="imp-op">*</span></label>
                    <input
                      required
                      type="password"
                      name="password"
                      class="form-control"
                      id="pass"
                    />
                    <span id="passError"></span>
                  </div>
                  <div class="col-md-6 mt-3">
                    <label for="password">Confirm Password<span class="imp-op">*</span></label>
                    <input
                      required
                      type="text"
                      class="form-control"
                      id="c-pass"
                      autocomplete="off"
                    />
                    <span id="passError"></span>
                  </div>
                  <div class="col-md-12">
                    <span class="imp-op imp-op-tx">Note: Field marked with (*) are mandatory fields.</span>
                  </div>
                  <!-- <input required type="text" class="form-control"> -->
                </div>

                <!-- Submit button -->
                <div class="row">
                  <div class="col-md-5 mb-3">
                    <button
                      required
                      name="submit"
                      type="submit"
                      id="reg-submit"
                      class="form-control mt-4 bg-secondary text-light"
                      style="cursor:not-allowed"
                      disabled>
                      Submit
                    </button>
                  </div>
                  <div class="col-md-3">
                    <button class="form-control mt-4 border-0">
                      <a href="home" class="bg-primary text-light p-2 px-5 text-center rounded text-decoration-none"><i class="fas fa-home"></i> Home</a>
                    </button>
                  </div>
                  <div class="col-md-4 text-center">
                    <button class="form-control mt-4 border-0">
                        <span>Already Registered?</span>
                        <a href="login" class="text-center">Login Here</a>
                    </button>
                  </div>
                  <div class="col-md-12 text-center">
                    <span><a href="https://hnbguclubs.live/" class="text-secondary">https://hnbguclubs.live/</a></span>
                  </div>
                </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </body>
</html>
