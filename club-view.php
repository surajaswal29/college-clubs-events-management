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
          <div class="col-md-12 mt-sm-5">
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
      </div>
      <div class="col-md-4">
          <div class="club-member">
              <h2>Club Members</h2>
              <div class="member-box mt-4">
                  <?php include 'club-members.php' ?>
              </div>
          </div>

          <div class="row mt-4">
                <div class="col-md-12">
                  <div class="recent-events border rounded">
                    <h2>Recent Event</h2>
                      <?php include 'recent-event.php'; ?>
                  </div>
                </div>
              </div>
      </div>
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
</section>
<?php include "footer.php"?>
  </body>
</html>
<!--Author: Suraj Aswal -->