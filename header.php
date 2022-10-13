<!-- HNBGU Council Header -->
<header class="container-fluid sticky-header" id="header">
      <div class="row border-bottom w-full relative">
        <div class="col-md-4 hnbgu-logo pr-center">
          <div class="logo" id="logo">
            <img
              src="images/HNBG-new-logo.png"
              alt="HNBGU Logo"
              class="img-fluid"
            />
          </div>
          <div class="brand" id="brand">
            <h1>SCHOOL OF ENGINEERING AND TECHNOLOGY</h1>
            <h1>HEMVATI NANDAN BAHUGUNA GARHWAL UNIVERSITY</h1>
            <span>A Central University</span>
          </div>
        </div>
        <!-- <div class="svg">
        <svg  viewBox="0 0 1440 320"><path fill=" rgb(0, 128, 0)" fill-opacity="1" d="M0,64L60,80C120,96,240,128,360,160C480,192,600,224,720,218.7C840,213,960,171,1080,160C1200,149,1320,171,1380,181.3L1440,192L1440,0L1380,0C1320,0,1200,0,1080,0C960,0,840,0,720,0C600,0,480,0,360,0C240,0,120,0,60,0L0,0Z"></path></svg></div> -->
        <div class="col-md-8 pr-center-1 bg-md-dark">
          <nav class="hnbgu-navbar dp-sb">
            <a href="home" class="aftereffect "><i class="fas fa-home"></i> Home</a>
            <a href="#" class="ham-default" id="ham-default"
              ><i class="fas fa-bars"></i
            ></a>
            <div class="hnbgu-nav-links hide-navbar" id="hnbgu-nav-links">
              <a href="eventlist " class="aftereffect ">Events</a>
              <a href="alumni " class="aftereffect ">Alumni</a>
              <!-- <a href="soet">SOET</a> -->
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
              <a href="about " class="aftereffect ">About</a>
              <a href="contact" class="aftereffect ">Contact us</a>
              <?php
              if(isset($_SESSION['user_name'])){
              ?>
                  <div href='#' class='profile-btn'>
                    <i class="fa-solid fa-user"></i>
                    &nbsp;&nbsp;
                    <?php echo $_SESSION['user_name'] ?>
                    <div class="profile-drop">
                        <a href="profile?id=<?php echo $_SESSION['id'];?>" class="text-light"><i class="fa-solid fa-id-card"></i> View Profile</a>
                        <a href="userlogout" class="text-light bg-secondary"><i class="fa-solid fa-right-from-bracket"></i> Log out</a>
                    </div>
              </div>
                
              <?php
              }else{
              ?>
              <a href="login" class="aftereffect ">Login</a>
              <!-- <a href="registration">Register</a> -->
              <?php
              }
              ?>
            </div>
          </nav>
        </div>
      </div>
      <script src="student-clubs-socities/js/onscroll.js"></script>
</header>
