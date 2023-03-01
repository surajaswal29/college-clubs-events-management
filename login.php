<?php include "master.php"?>
    <div class="main-wrap-login">
      <div class="outer-wrap">
        <h1>HNBGU Councils and Clubs</h1>

        <form action="#" method="post" class="form">
          <label for="email">Email</label>
          <br />
          <input type="email" name="email" id="email" placeholder="Email" />
          <br />
          <label for="password">Password</label>
          <br />
          <input
            type="password"
            name="password"
            id="password"
            placeholder="Password"
          />
          <br />
          <input type="checkbox" name="check" id="check" />
          <span class="rm-me">Remember Me</span>
          <a href="#" class="fg-pa">Forgot Password?</a>
          <br />
          <button type="submit" name="submit" class="btn">Log in</button>
        </form>
        <div class="terms mt-4 text-center">
          <span>Not Registered Yet?</span>
          <a href="registration" class="border rounded p-1">Register Now</a>
        </div>
        <?php
            if(isset($_POST['submit'])){
              $email = $_POST['email'];
              $pass = $_POST['password'];

              $query = "SELECT * FROM `users` WHERE email = '{$email}' AND password='{$pass}' AND verified='1'";
              $output = mysqli_query($conn,$query);

              if(mysqli_num_rows($output)>0){
                $data = mysqli_fetch_assoc($output);

                
                  $_SESSION['id'] =  $data['id'];
                  // $_SESSION['club_name'] =  $data['club'];
                  $_SESSION['user_name'] =  $data['firstname'];
                  $_SESSION['last_name'] =  $data['lastname'];
                  $_SESSION['email'] =  $data['email'];
                  $_SESSION['course'] =  $data['course'];
                  $_SESSION['register_id'] =  $data['reg_id'];
                  $_SESSION['isLoggedIn'] = true;

                  redirect('registeredclubs');
                
              }else{
                echo"<span class='err'>Error: Username or Password does not match!</span>";
              }
            }
        ?>
        <!--  -->
      </div>
    </div>
  </body>
</html>

