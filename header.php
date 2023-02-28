<!-- HNBGU Council Header -->
<header class="container-fluid sticky-header">
      <div class="row border-bottom">
        <div class="col-md-5 hnbgu-logo d-flex align-items-center">
          <div class="logo">
            <img
              src="images/HNBG-new-logo.png"
              alt="HNBGU Logo"
              class="img-fluid"
            />
          </div>
          <div class="brand" id="brand">
            <h1>HEMVATI NANDAN BAHUGUNA GARHWAL UNIVERSITY</h1>
            <span>A Central University</span>
          </div>
        </div>
        <div class="col-md-7 pr-center-1 bg-md-dark">
          <nav class="hnbgu-navbar dp-sb">
            <a href="home"><i class="fas fa-home"></i> <span class="only-desktop">Home</span></a>
            <div class="d-flex">
              <?php
                  if(isset($_SESSION['user_name'])){
                    echo '<a class="d-md-none" href="profile?id='.$_SESSION['register_id'].'">Hello, '.$_SESSION['user_name'].' </a>';
                  }
              ?>
              
              <a href="#" class="ham-default" id="ham-default"><i class="fas fa-bars"></i></a>
              <div class="hnbgu-nav-links hide-navbar pr-center" id="hnbgu-nav-links">
                <span class="cross-icon" id="cross-icon"><i class="fa-sharp fa-solid fa-xmark"></i></span>
                <a href="eventlist">Events</a>
                <!-- <a href="alumni">Alumni</a> -->
                <!-- <a href="soet">SOET</a> -->
                <div href="#" id="drop-club">Clubs &nbsp; <i class="fa-solid fa-chevron-down"></i>
                  <div class="club-dropdown shadow" id="club-dropdown">
                    <?php
                      $drop_club = "SELECT * FROM club_info";
                      $drop_club_query = mysqli_query($conn,$drop_club);

                      if(mysqli_num_rows($drop_club_query)>0){
                        while($drop_data = mysqli_fetch_assoc($drop_club_query)){
                          echo '<a href="clubs?cc_name='.$drop_data["club_name"].'&club_id='.$drop_data["id"].'">'.$drop_data['club_name'].'</a>';
                        }
                      }
                    ?>
                  </div>
                </div>
                <!-- <a href="#">Register</a> -->
                <a href="about">About</a>
                <a href="contact">Contact us</a>
                <?php
                if(isset($_SESSION['user_name'])){
                ?>
                    <div href='#' class='profile-btn'>
                      <i class="fa-solid fa-user"></i>
                      &nbsp;&nbsp;
                      <?php echo $_SESSION['user_name'] ?>
                      <div class="profile-drop">
                          <a href="profile?id=<?php echo $_SESSION['register_id'];?>" class="text-light"><i class="fa-solid fa-id-card"></i> View Profile</a>
                          <a href="userlogout" class="text-light bg-secondary"><i class="fa-solid fa-right-from-bracket"></i> Log out</a>
                      </div>
                </div>
                  
                <?php
                }else{
                ?>
                <a href="login">Login</a>
                <!-- <a href="registration">Register</a> -->
                <?php
                }
                ?>
              </div>
            <div>
          </nav>
        </div>
      </div>
</header>
