<?php 
  include "master.php";
  include "header.php";

  $club_name = $_GET['cc_name'];
  $club_id = $_GET['club_id'];


  $club_query= "SELECT * FROM club_info WHERE id='{$club_id}'";
  $club_output = mysqli_query($conn,$club_query);

  $club_data = mysqli_fetch_assoc($club_output);
?>
<div class="club-banner">
  <img src="upload-image/<?php echo $club_data['c_image']; ?>" alt="Club Banner">
</div>
<section class="container-fluid">
  <div class="container club-sub">
      <div class="row">
          <div class="col-md-12 mt-5">
                  <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                      <li class="breadcrumb-item"><a href="home">Home</a></li>
                      <li class="breadcrumb-item"><a href="registeredclubs">Registered Clubs</a></li>
                      <li class="breadcrumb-item active" aria-current="page"><?php echo $club_name; ?></li>
                    </ol>
                  </nav>
              <h1><?php echo $club_name; ?></h1>
              <p style="text-align:justify;">
                <?php echo $club_data['club_description']; ?>             
              </p>
          </div>
      </div>
      <div class="row">
      <div class="col-md-8">
          <div class="row">
              <?php include "events-component.php"; ?>
          </div>
          <div class="row mt-4">
              <div class="col-md-12">
                  <h1>Club Gallery</h1>
              </div>
              <div class="row justify-content-space-between">
                  <div class="col-md-4 mt-2">
                      <img src="images/profile-icon.jpg" alt="gallery" class="img-fluid">
                  </div>
                  <div class="col-md-4 mt-2">
                      <img src="images/profile-icon.jpg" alt="gallery" class="img-fluid">
                  </div>
                  <div class="col-md-4 mt-2">
                      <img src="images/profile-icon.jpg" alt="gallery" class="img-fluid">
                  </div>
                  <div class="col-md-4 mt-2">
                      <img src="images/profile-icon.jpg" alt="gallery" class="img-fluid">
                  </div>
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
<?php include "footer.php"?>
  </body>
</html>
<!--Author: Suraj Aswal -->