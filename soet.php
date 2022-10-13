<?php 
  include "master.php";
  include "header.php";
  // echo bin2hex(random_bytes(16));
?>
    <!-- HNBGU Council Main Banner -->
    <div class="club-banner">
      <img src="upload-image/bg-image.jpg" alt="Club Banner">
    </div>
    <section class="container-fluid">
      <div class="container club-sub">
        <!-- HNBGU Council Description -->
          <div class="row mt-4">
            <div class="col-md-12">
              <!-- <h1>Technical and Cultural Societies</h1> -->
              <h1>SOET - School of Engineering and Technology</h1>
            </div>
            <div class="col-md-12 d-flex tcc-img">
              <!-- <img
                src="http://www.hnbgu.ac.in/sites/default/files/2020-04/IMG-20191212-WA0001%281%29.jpg"
                alt=""
              /> -->
              <p>
               Lorem ipsum dolor sit amet consectetur adipisicing elit. Aut nobis facere saepe atque obcaecati dolorem illo ex pariatur. Aliquam in doloribus ex natus quidem eveniet eum mollitia nisi blanditiis, possimus quod totam dolores quas placeat nobis sit aliquid numquam animi sed optio officia dignissimos architecto impedit vel. Voluptates, quasi est!
              </p>
            </div>
            
          </div>
          <div class="row">
            <div class="col-md-8 hnbgu-council-tab border">
              <ul>
                <li>
                  <!-- Council Name -->
                  <div class="row">
                    <div class="col-12 dp-sb" id="down-tab">
                      <h4>Department of Computer Science & Engineering</h4>
                      <i class="fas fa-angle-down"></i>
                    </div>
                  </div>
                  <!-- Clubs Names -->
                  <div class="row">
                    <div class="col-12">
                      <div id="hnbgu-clubs" class="hnbgu-clubs hnbgu-clubs-hide">
                        <ul>
                          <li>BTECH-CSE </li>
                          <li>MCA</li>
                          <li>PhD</li>
                          <li>MTECH</li>
                          <!-- <li><a href="clubs?cc_name=Designing Club" class="club-link text-dark"> Designing Club                 </a>  </li> -->
                        </ul>
                      </div>
                    </div>
                  </div>
                </li>
                <li>
                  <!-- Council Name -->
                  <div class="row">
                    <div class="col-12 dp-sb" id="down-tab">
                      <h4>Department of Electronic and Communication Engineering</h4>
                      <i class="fas fa-angle-down"></i>
                    </div>
                  </div>
                  <!-- Clubs Names -->
                  <div class="row">
                    <div class="col-12">
                      <div id="hnbgu-clubs" class="hnbgu-clubs hnbgu-clubs-hide">
                      <ul>
                          <li>BTECH-CSE </li>
                          
                          <li>PhD</li>
                          <li>MTECH</li>
                          <!-- <li><a href="clubs?cc_name=Designing Club" class="club-link text-dark"> Designing Club                 </a>  </li> -->
                        </ul>
                      </div>
                    </div>
                  </div>
                </li>
                <li>
                  <!-- Council Name -->
                  <div class="row">
                    <div class="col-12 dp-sb" id="down-tab">
                      <h4>Department of Mechanical Engineering</h4>
                      <i class="fas fa-angle-down"></i>
                    </div>
                  </div>
                  <!-- Clubs Names -->
                  <div class="row">
                    <div class="col-12">
                      <div id="hnbgu-clubs" class="hnbgu-clubs hnbgu-clubs-hide">
                      <ul>
                          <li>BTECH-CSE </li>
                          
                          <li>PhD</li>
                          <li>MTECH</li>
                          <!-- <li><a href="clubs?cc_name=Designing Club" class="club-link text-dark"> Designing Club                 </a>  </li> -->
                        </ul>
                      </div>
                    </div>
                  </div>
                </li>
                <li>
                  <!-- Council Name -->
                  <div class="row">
                    <div class="col-12 dp-sb" id="down-tab">
                      <h4>Department of Information Technology</h4>
                      <i class="fas fa-angle-down"></i>
                    </div>
                    <div id="hnbgu-clubs" class="hnbgu-clubs hnbgu-clubs-hide">
                      <ul>
                          <li>BTECH-CSE </li>
                          
                          <li>PhD</li>
                          <li>MTECH</li>
                          <!-- <li><a href="clubs?cc_name=Designing Club" class="club-link text-dark"> Designing Club                 </a>  </li> -->
                        </ul>
                      </div>
                  </div>
                </li>
                
              </ul>
              <div class="row mt-3">
                <div class="col-md-12">
                  <?php include "events-component.php"; ?>
                </div>
                <div class="col-md-12 view-more">
                  <a href="eventlist"
                    >View more <i class="fas fa-angle-double-right"></i
                  ></a>
                </div>
                <div class="col-md-12 reg-note mb-2">
                  <p>
                    If you want to join a group or want to participate in any event
                    then you have to fill a registration form first.
                  </p>
                  <p> Note: This is just one time registration. You don't have to
                      register again, just login to the site and join event.
                  </p>
                  <a href="registration">Register Here</a>
                </div>
              </div>
            </div>
            
                <?php include "sidebar.php" ?>
             
          </div>
      </div>
    </section>
    <!-- HNBGU Footer -->
  <?php include "footer.php"?>
    <!-- owl-carousel script -->
    <script>
      $(document).ready(function () {
        $(".owl-carousel").owlCarousel({
          items: 1,
          nav: true,
          loop: true,
          autoplay: true,
          dots: true,
        });
      });
    </script>
  </body>
</html>
<!--Author: Suraj Aswal -->
