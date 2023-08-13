<?php 
  include "master.php";
  include "header.php";
  // echo bin2hex(random_bytes(16));

  $banner_sql = "SELECT * FROM `main-banner`";
  $banner_sql_query = mysqli_query($conn,$banner_sql);
?>
    <!-- HNBGU Council Main Banner -->
    <section id="banner">
      <div class="owl-carousel">
        <!-- <div class="main-banner item-1"></div>
        <div class="main-banner item-2"></div> -->
        <?php
        if(mysqli_num_rows($banner_sql_query)>0){
          while($banner_data = mysqli_fetch_assoc($banner_sql_query)){
        
              echo'<div class="main-banner item-3">
                  <img src="'.$banner_data['banner-image'].'" alt="'.$banner_data['banner-description'].'">
                  <div class="overlay-banner"></div>
              </div>';
        
         }
        }
        ?>
      </div>
    </section>
    <div class="content">
      <div class="simple-marquee-container">
        <div class="marquee-sibling">Notification</div>
        <div class="marquee">
          <ul class="marquee-content-items">
            <?php
              $marquee_SQL = "SELECT * FROM club_info";
              $marquee_SQL_query=mysqli_query($conn,$marquee_SQL);

              if(mysqli_num_rows($marquee_SQL_query)>0){
                while($data = mysqli_fetch_assoc($marquee_SQL_query)){
                  echo'<li>'.$data['club_name'].'</li>';
                }
              }
            ?>
          </ul>
        </div>
      </div>
    </div>
    <!-- HNBGU Council Description -->
    <section id="description" class="container-fluid">
      <div class="row">
        <div class="col-md-9 hnbgu-council-tab">
          <main class="container p-2">
          <div class="row mt-4 px-md-1">
              <div class="col-md-12">
                <!-- <h1>Technical and Cultural Societies</h1> -->
                <h1 class="font-50">Student Clubs and Societies</h1>
              </div>
              <div class="col-md-12">
                <p style = "text-align: justify">
                  Student Clubs and Societies have a lot to offer. Whether you join as a
                  member or choose to lead one, simply taking part in an
                  extracurricular group will enhance your college experience. Gaining
                  skills, making connections, and broadening your knowledge through a
                  student organization will help you become a more well-rounded
                  individual — one that’s ready to take on their future career!
                </p>
                <!-- <p class='>
                  Student clubs, societies and publications are essential part of student life. The University welcomes the contributions of student clubs and aims to promote a lively, creative and inclusive range of activities by providing support, resources and guidance for committees to manage their clubs effectively.
                </p> -->
              </div>
          </div>
          <div class="row">
              <div class="col-md-12">
                <div class="row">
                    <div class="col-md-4">
                      <a href="<?php echo (isset($_SESSION['isLoggedIn']))?'userJoinClub':'login' ?>" class="recent-event-box main-card-box text-decoration-none text-dark">
                              <div class="row">
                                <div class="col-md-12">
                                  <div class="event-img">
                                    <img
                                      src="https://cdn.eduadvisor.my/articles/2020/09/Reasons-to-Join-Uni-Clubs-Leadership.png"
                                      alt="event images"
                                    />
                                  </div>
                                </div>
                                <div class="col-md-12 mt-2">
                                  <h4>Join a Club</h4>
                                  <p>Join your favrioute clubs</p>
                                </div>
                              </div>
                      </a>
                    </div>

                    <div class="col-md-4">
                      <a href="<?php echo (isset($_SESSION['isLoggedIn']))?'clubregistration':'login' ?>" class="recent-event-box main-card-box text-decoration-none text-dark">
                              <div class="row">
                                <div class="col-md-12">
                                  <div class="event-img">
                                    <img
                                      src="https://www.hillsdale.edu/wp-content/uploads/2016/08/Writing.png"
                                      alt="event images"
                                    />
                                  </div>
                                </div>
                                <div class="col-md-12 mt-2">
                                  <h4>Register a Club</h4>
                                  <p>Submit New Club Registration Request</p>
                                </div>
                              </div>
                      </a>
                    </div>
                      
                    <div class="col-md-4">
                      <a href="registeredclubs" class="recent-event-box main-card-box text-decoration-none text-dark">
                              <div class="row">
                                <div class="col-md-12">
                                  <div class="event-img">
                                    <img
                                      src="https://media.istockphoto.com/id/1138844016/photo/overhead-view-on-business-people-around-desk.jpg?s=612x612&w=0&k=20&c=51FcFfIMkgceDXTG2lI8qDOJ6n09KQLcGqgojrzC8co="
                                      alt="event images"
                                    />
                                  </div>
                                </div>
                                <div class="col-md-12 mt-2">
                                  <h4>List of clubs</h4>
                                  <p>A list of registered clubs</p>
                                </div>
                              </div>
                      </a>
                    </div>

                    <!-- <div class="col-md-4">
                      <a href="soet" class="recent-event-box main-card-box text-decoration-none text-dark">
                              <div class="row">
                                <div class="col-md-12">
                                  <div class="event-img">
                                    <img
                                      src="images/bg-image.jpg"
                                      alt="soet images"
                                    />
                                  </div>
                                </div>
                                <div class="col-md-12 mt-2">
                                  <h4>HNBGU SOET</h4>
                                  <p>School of Engineering and Technology</p>
                                </div>
                              </div>
                      </a>
                    </div> -->

                    <div class="col-md-4">
                      <a href="#" class="recent-event-box main-card-box text-decoration-none text-dark">
                              <div class="row">
                                <div class="col-md-12">
                                  <div class="event-img">
                                    <img
                                      src="https://media.istockphoto.com/id/1407973573/photo/magnifier-focuses-on-the-word-rules-analyzing-or-following-the-rules.webp?b=1&s=170667a&w=0&k=20&c=8ILJew5zUSOHAFllJ79BD-qGszE3Adkw6Ko0fS8gSLQ="
                                      alt="event images"
                                    />
                                  </div>
                                </div>
                                <div class="col-md-12 mt-2">
                                  <h4>Rules & Regulations</h4>
                                  <p>Information about university policies relating to clubs and societies.</p>
                                </div>
                              </div>
                      </a>
                    </div>

                    <div class="col-md-4">
                      <a href="eventlist" class="recent-event-box main-card-box text-decoration-none text-dark">
                              <div class="row">
                                <div class="col-md-12">
                                  <div class="event-img">
                                    <img
                                      src="https://artisthubhq.com/wp-content/uploads/2018/04/ultimate-guide.jpg"
                                      alt="event images"
                                    />
                                  </div>
                                </div>
                                <div class="col-md-12 mt-2">
                                  <h4>Events</h4>
                                  <p>Events Organised by their respective clubs.</p>
                                </div>
                              </div>
                      </a>
                    </div>
                      
                    <div class="col-md-4">
                      <a href="#" class="recent-event-box main-card-box text-decoration-none text-dark">
                              <div class="row">
                                <div class="col-md-12">
                                  <div class="event-img">
                                    <img
                                      src="https://learnenglish.britishcouncil.org/sites/podcasts/files/RS7990_GettyImages-875599880-hig.jpg"
                                      alt="event images"
                                    />
                                  </div>
                                </div>
                                <div class="col-md-12 mt-2">
                                  <h4>Events guidance</h4>
                                  <p>A hub of advice for organising an event for your club.</p>
                                </div>
                              </div>
                      </a>
                    </div>

                    
                </div>
              </div>
          </div>
          </main>
        </div>
        <?php include "sidebar.php"; ?>
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
          // stagePadding:10,
          // margin:20
        });
      });

      $(function () {
        /* Example options:
            
                let options = {
                    autostart: true,
                    property: 'value',
                    onComplete: null,
                    duration: 20000,
                    padding: 10,
                    marquee_class: '.marquee',
                    container_class: '.simple-marquee-container',
                    sibling_class: 0,
                    hover: true,
                    velocity: 0.1
                    direction: 'right'
                }

                $('.simple-marquee-container').SimpleMarquee(options);
                
            */

        $(".simple-marquee-container").SimpleMarquee({
          duration: 30000,
          velocity: 0.1
        });
      });
    </script>
  </body>
</html>
<!--Author: Suraj Aswal -->
