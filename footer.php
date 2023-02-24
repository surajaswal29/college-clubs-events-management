    <div class="main-wrap">
            <div class="footer-wrap">
                <div class="footer-wrap-1">
                    <div class="footer-section">
                        <h1>About</h1>
                        <p class='text-justify'>
                            Student clubs are essential part of student life. HNBGU Clubs welcomes the contributions of student clubs and aims to promote a lively, creative and inclusive range of activities by providing support, resources and guidance for managing the clubs effectively.                       
                        </p>
                    </div>
                    <div class="footer-section">
                        <h1>Important Links</h1>
                        <a href="https://online.hnbgu.ac.in/">Examination Form</a>
                        <a href="https://hnbgu.ac.in/">Main Website</a>
                        <a href="https://hnbgu.ac.in/notification-circulars">HNBGU Notification</a>
                        <a href="https://hnbgu.ac.in/right-to-information">RTI</a>
                    </div>
                    <div class="footer-section">
                        <h1>Contact Information</h1>
                        <a href="mailto:">councilandclubs@gmail.com</a>
                        <a href="#">+91-7037672652</a>
                        <a href="#">+91-8923229233</a>
                        <a href="#">+91-7088794524</a>
                    </div>
                    <div class="footer-section">
                      <h1>Councils & Clubs</h1>
                      <?php
                        $club_list_footer = "SELECT * FROM club_info";
                        $club_list_footer_query = mysqli_query($conn,$club_list_footer);

                        if(mysqli_num_rows($club_list_footer_query)){
                          while($data = mysqli_fetch_assoc($club_list_footer_query)){
                            echo'<a href="'.$data['club_name'].'">'.$data['club_name'].'</a>';
                          }
                        }
                      ?>
                     
                    </div>
                </div>
                <div class="footer-wrap-2">
                    <div class="line"></div>
                    <div class="social-link">
                        <a href="https://www.instagram.com/hnbguclubs/?hl=en">
                            <img src="images/sm/fb.png" alt="Facebook">
                        </a>
                        <a href="https://www.instagram.com/hnbguclubs/?hl=en">
                            <img src="images/sm/ins.png" alt="Instagram">
                        </a>
                        <a href="https://www.instagram.com/hnbguclubs/?hl=en">
                            <img src="images/sm/linkedin.png" alt="linkedin">
                        </a>
                        <a href="https://www.instagram.com/hnbguclubs/?hl=en">
                            <img src="images/sm/twitter.png" alt="twitter">
                        </a>
                    </div>
                </div>
            </div>
            <div class="footer-bottom">
                <div class="first-box">
                    <a href="#">Terms & Conditions</a>
                    <a href="#">Privacy Policy</a>
                    <a href="https://github.com/surajaswal29">Developer Information</a>
                </div>
                <div class="last-box">
                    <a href="#">&copy; Copyright <?php echo date('Y'); ?> https://hnbguclubs.live</a>
                </div>
            </div>
        </div>