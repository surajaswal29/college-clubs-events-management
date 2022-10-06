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
                HNBGU Councils & Clubs have a lot to offer. Whether you join as a
                member or choose to lead one, simply taking part in an
                extracurricular group will enhance your college experience. Gaining
                skills, making connections, and broadening your knowledge through a
                student organization will help you become a more well-rounded
                individual — one that’s ready to take on their future career!
              </p>
            </div>
            <div class="col-12 mt-2">
              <p>The following clubs and councils have been registered.</p>
            </div>
          </div>
          <div class="row">
            <div class="col-md-8 hnbgu-council-tab border">
              <ul>
                <li>
                  <!-- Council Name -->
                  <div class="row">
                    <div class="col-12 dp-sb" id="down-tab">
                      <h4>Technical Clubs</h4>
                      <i class="fas fa-angle-down"></i>
                    </div>
                  </div>
                  <!-- Clubs Names -->
                  <div class="row">
                    <div class="col-12">
                      <div id="hnbgu-clubs" class="hnbgu-clubs hnbgu-clubs-hide">
                        <ul>
                          <li><a href="clubs?cc_name=Computer Science Club" class="club-link text-dark"> Computer Science Club          </a> </li>
                          <li><a href="clubs?cc_name=Electrical Club" class="club-link text-dark"> Electrical Club                </a>  </li>
                          <li><a href="clubs?cc_name=Mechanical Club" class="club-link text-dark"> Mechanical Club                </a>   </li>
                          <li><a href="clubs?cc_name=Robotics and Instrumental Club" class="club-link text-dark"> Robotics and Instrumental Club </a>   </li>
                          <li><a href="clubs?cc_name=Designing Club" class="club-link text-dark"> Designing Club                 </a>  </li>
                        </ul>
                      </div>
                    </div>
                  </div>
                </li>
                <li>
                  <!-- Council Name -->
                  <div class="row">
                    <div class="col-12 dp-sb" id="down-tab">
                      <h4>Fine Arts</h4>
                      <i class="fas fa-angle-down"></i>
                    </div>
                  </div>
                  <!-- Clubs Names -->
                  <div class="row">
                    <div class="col-12">
                      <div id="hnbgu-clubs" class="hnbgu-clubs hnbgu-clubs-hide">
                        <ul>
                          <li><a href="clubs?cc_name=Language Club" class="club-link text-dark"> Language Club</a></li>
                          <li><a href="clubs?cc_name=Reading Club" class="club-link text-dark"> Reading Club</a></li>
                          <li><a href="clubs?cc_name=Writing Club" class="club-link text-dark"> Writing Club</a></li>
                          <li><a href="clubs?cc_name=Debate Club" class="club-link text-dark"> Debate Club</a></li>
                        </ul>
                      </div>
                    </div>
                  </div>
                </li>
                <li>
                  <!-- Council Name -->
                  <div class="row">
                    <div class="col-12 dp-sb" id="down-tab">
                      <h4>Sports</h4>
                      <i class="fas fa-angle-down"></i>
                    </div>
                  </div>
                  <!-- Clubs Names -->
                  <div class="row">
                    <div class="col-12">
                      <div id="hnbgu-clubs" class="hnbgu-clubs hnbgu-clubs-hide">
                        <ul>
                          <li>Drama Club</li>
                          <li>Music Club</li>
                          <li>Poetry Club</li>
                          <li>Script Writing Community</li>
                          <li>Video and Media Club</li>
                          <li>Anchor Community</li>
                        </ul>
                      </div>
                    </div>
                  </div>
                </li>
                <li>
                  <!-- Council Name -->
                  <div class="row">
                    <div class="col-12 dp-sb" id="down-tab">
                      <h4>Cultural Societies</h4>
                      <i class="fas fa-angle-down"></i>
                    </div>
                  </div>
                </li>
                <li>
                  <!-- Council Name -->
                  <div class="row">
                    <div class="col-12 dp-sb" id="down-tab">
                      <h4>Language & Literature Societies</h4>
                      <i class="fas fa-angle-down"></i>
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
            <div class="col-md-4">
          <div class="club-member">
              <h2>Club Members</h2>
              <div class="member-box mt-4">
                  <div class="single-member">
                      <div class="row">
                          <div class="col-3 pr-center">
                              <img src="images/profile-icon.jpg" alt="profile">
                          </div>
                          <div class="col-9 ">
                              <span>Name: Suraj Aswal</span>
                              <span>Role: Club Head</span>
                          </div>
                      </div>
                  </div>
                  <div class="single-member">
                      <div class="row">
                          <div class="col-3 pr-center">
                              <img src="images/profile-icon.jpg" alt="profile">
                          </div>
                          <div class="col-9 ">
                              <span>Name: Suraj Aswal</span>
                              <span>Role: Club Head</span>
                          </div>
                      </div>
                  </div>
                  <div class="single-member">
                      <div class="row">
                          <div class="col-3 pr-center">
                              <img src="images/profile-icon.jpg" alt="profile">
                          </div>
                          <div class="col-9 ">
                              <span>Name: Suraj Aswal</span>
                              <span>Role: Member</span>
                          </div>
                      </div>
                  </div>
                  <div class="single-member">
                      <div class="row">
                          <div class="col-3 pr-center">
                              <img src="images/profile-icon.jpg" alt="profile">
                          </div>
                          <div class="col-9 ">
                              <span>Name: Suraj Aswal</span>
                              <span>Role: Club Head</span>
                          </div>
                      </div>
                  </div>
                  <div class="single-member">
                      <div class="row">
                          <div class="col-3 pr-center">
                              <img src="images/profile-icon.jpg" alt="profile">
                          </div>
                          <div class="col-9 ">
                              <span>Name: Suraj Aswal</span>
                              <span>Role: Club Head</span>
                          </div>
                      </div>
                  </div>
              </div>
          </div>

          <div class="row mt-4">
                <div class="col-md-12">
                  <div class="recent-events border rounded">
                    <h2>Recent Event</h2>
                    <div class="recent-event-box border">
                      <div class="row">
                        <div class="col-md-12">
                          <div class="event-img">
                            <img
                              src="https://www.taylor.edu/dA/78efae8f8f/image/robotics-thumb.jpg"
                              alt="event images"
                            />
                          </div>
                        </div>
                        <div class="col-md-12">
                          <div class="event-meta">
                            <span
                              ><i class="fas fa-calendar-alt"></i>
                              22-06-2022</span
                            >
                            <span
                              ><i class="fas fa-users"></i> Computer Science
                              Club</span
                            >
                          </div>
                          <div class="event-description">
                            <span><strong>Name:</strong> Hackathon 1.0</span>
                            <span>
                              <strong>Venue</strong>: HEMVATI NANDAN BAHUGUNA
                              GARHWAL UNIVERSITY, Chaursa Campus
                            </span>
                            <span>
                              <strong>Start Date:</strong> 22-06-2022 |
                              <strong>End Date:</strong> 22-06-2022
                            </span>
                          </div>
                          <div class="event-join">
                            <!-- <a href="#" class="badge p-2 px-4">Join</a> -->
                            <a href="event-view.html" class="badge p-1 px-2 mb-2"
                              >View</a
                            >
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="recent-event-box border">
                      <div class="row">
                        <div class="col-md-12">
                          <div class="event-img">
                            <img src="images/hackathon.png" alt="event images" />
                          </div>
                        </div>
                        <div class="col-md-12">
                          <div class="event-meta">
                            <span
                              ><i class="fas fa-calendar-alt"></i>
                              22-06-2022</span
                            >
                            <span
                              ><i class="fas fa-users"></i> Computer Science
                              Club</span
                            >
                          </div>
                          <div class="event-description">
                            <span><strong>Name:</strong> Hackathon 1.0</span>
                            <span>
                              <strong>Venue</strong>: HEMVATI NANDAN BAHUGUNA
                              GARHWAL UNIVERSITY, Chaursa Campus
                            </span>
                            <span>
                              <strong>Start Date:</strong> 22-06-2022 |
                              <strong>End Date:</strong> 22-06-2022
                            </span>
                          </div>
                          <div class="event-join">
                            <!-- <a href="#" class="badge p-2 px-4">Join</a> -->
                            <a href="event-view.html" class="badge p-1 px-2 mb-2"
                              >View</a
                            >
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="recent-event-box border">
                      <div class="row">
                        <div class="col-md-12">
                          <div class="event-img">
                            <img src="images/hackathon.png" alt="event images" />
                          </div>
                        </div>
                        <div class="col-md-12">
                          <div class="event-meta">
                            <span
                              ><i class="fas fa-calendar-alt"></i>
                              22-06-2022</span
                            >
                            <span
                              ><i class="fas fa-users"></i> Computer Science
                              Club</span
                            >
                          </div>
                          <div class="event-description">
                            <span><strong>Name:</strong> Hackathon 1.0</span>
                            <span>
                              <strong>Venue</strong>: HEMVATI NANDAN BAHUGUNA
                              GARHWAL UNIVERSITY, Chaursa Campus
                            </span>
                            <span>
                              <strong>Start Date:</strong> 22-06-2022 |
                              <strong>End Date:</strong> 22-06-2022
                            </span>
                          </div>
                          <div class="event-join">
                            <!-- <a href="#" class="badge p-2 px-4">Join</a> -->
                            <a href="event-view.html" class="badge p-1 px-2 mb-2"
                              >View</a
                            >
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
      </div>
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
