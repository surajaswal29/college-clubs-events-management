<!-- HNBGU Council Header -->
<header class="container-fluid">
      <div class="row border-bottom">
        <div class="col-md-5 hnbgu-logo pr-center">
          <div class="logo">
            <img
              src="images/HNBG-new-logo.png"
              alt="HNBGU Logo"
              class="img-fluid"
            />
          </div>
          <div class="brand">
            <h1>HEMVATI NANDAN BAHUGUNA GARHWAL UNIVERSITY</h1>
            <span>A Central University</span>
          </div>
        </div>
        <div class="col-md-7 pr-center-1 bg-md-dark">
          <nav class="hnbgu-navbar dp-sb">
            <a href="index.php"><i class="fas fa-home"></i> Home</a>
            <a href="#" class="ham-default" id="ham-default"
              ><i class="fas fa-bars"></i
            ></a>
            <div class="hnbgu-nav-links hide-navbar" id="hnbgu-nav-links">
              <a href="event-list.php">Events</a>
              <!-- <a href="#">Councils & Clubs -->
              <!-- <div class="council-dropdown">
                  <a href="#">1</a>
                  <a href="#">2</a>
                  <a href="#">3</a>
                  <a href="#">4</a>
                  <a href="#">5</a>
                </div> -->
              <!-- </a> -->
              <!-- <a href="#">Register</a> -->
              <a href="about.php">About</a>
              <a href="contact.php">Contact us</a>
              <?php
              if(isset($_SESSION['user_name'])){
              ?>
                  <div href='#' class='profile-btn'>
                    <i class="fa-solid fa-user"></i>
                    &nbsp;&nbsp;
                    <?php echo $_SESSION['user_name'] ?>
                    <div class="profile-drop">
                        <a href="#" class="text-light"><i class="fa-solid fa-id-card"></i> View Profile</a>
                        <a href="user-logout.php" class="text-light bg-secondary"><i class="fa-solid fa-right-from-bracket"></i> Log out</a>
                    </div>
              </div>
                
              <?php
              }else{
              ?>
              <a href="login.php">Login</a>
              <a href="registration.php">Register</a>
              <?php
              }
              ?>
            </div>
          </nav>
        </div>
      </div>
</header>
