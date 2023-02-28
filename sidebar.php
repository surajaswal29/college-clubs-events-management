<div class="col-md-3">
          <div class="useful-links">
              <h4>See also</h4>
              <?php
              if(isset($_SESSION['user_name'])){
                echo "<a href='clubregistration'>Register a New Club</a>";
              }else{
                echo "<a href='login'>Register a New Club</a>";
              }
              ?>
              <a href="<?php echo (isset($_SESSION['user_name']))?'userJoinClub':'login' ?>">Join a Club</a>
              <a href="registeredclubs">Clubs</a>
              <a href="contact">Contact us</a>
              <a href="about">About</a>
          </div>

          <div class="useful-links mt-5">
              <h4>Contact details</h4>
              <p>H.N.B.Garhwal University, Srinagar – 246174, Dist.Garhwal (Uttarakhand), India</p>
              <a href="#" class="nav-link text-dark"><b>Phone:</b> +91-7037672652</a>
              <a href="#" class="nav-link text-dark"><b>Email:</b> councilandclubs@gmail.com</a>
          </div>
          <div class="useful-links mt-5">
            <h4>Socials</h4>
              <a href="https://www.instagram.com/hnbguclubs/?hl=en" style="text-align:left" class="mt-2 btn text-light d-flex align-items-center px-2 ins-color"><img class="mr-2 sc-color-link" src="images/sm/cl/instagram.png" />Instagram</a>
              <a href="https://www.instagram.com/hnbguclubs/?hl=en" style="text-align:left" class="mt-2 btn text-light d-flex align-items-center px-2 tw-color"> <img class="mr-2 sc-color-link" src="images/sm/cl/twitter.png" />Twitter</a>
              <a href="https://www.instagram.com/hnbguclubs/?hl=en" style="text-align:left" class="mt-2 btn text-light d-flex align-items-center px-2 ln-color"> <img class="mr-2 sc-color-link" src="images/sm/cl/linkedin.png" />Linkedin</a>
              <a href="https://www.instagram.com/hnbguclubs/?hl=en" style="text-align:left" class="mt-2 btn text-light d-flex align-items-center px-2 fb-color"> <img class="mr-2 sc-color-link" src="images/sm/cl/fb.png" />Facebook</a>
          </div>
        </div>