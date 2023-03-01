<div class="container-fluid">
    <div class="row border">
        <div class="col-md-5 hnbgu-logo pr-center">
              <div class="logo">
                <img
                  src="../images/HNBG-new-logo.png"
                  alt="HNBGU Logo"
                  class="img-fluid"
                />
              </div>
              <div class="brand">
                <h1>HEMVATI NANDAN BAHUGUNA GARHWAL UNIVERSITY</h1>
                <span>A Central University</span>
              </div>
        </div>
        <div class="col-md-7 pr-center-1 px-4">
            <h1>Admin Panel</h1>
        </div>
    </div>
    <div class="row border-bottom py-2">
        <div class="col-md-8">
            <nav class="nav nav-color-bg">
                <a class="nav-link btn mx-2 text-light" href="main.php">Home</a>
                <a class="nav-link btn mx-2 text-light" href="event-add.php">Add Event</a>
                <?php 
                    $student_notification = "SELECT * FROM users WHERE verified = 0";
                    $student_notification_query = mysqli_query($conn,$student_notification);

                    $count_student_notification = mysqli_num_rows($student_notification_query);
                ?>
                
                <?php 
                    $club_notification = "SELECT * FROM club_info WHERE verify = 0";
                    $club_notification_query = mysqli_query($conn,$club_notification);

                    $count_club_notification = mysqli_num_rows($club_notification_query);
                ?>
                <a class="nav-link btn mx-2 text-light" href="add-clubs.php">Club Request
                    <?php
                    if($count_club_notification>0){
                        echo "<sup class='text-danger fw-bold bg-light px-1 rounded-circle'>".$count_club_notification."</sup>";
                    }
                    ?>
                </a>
                <a class="nav-link btn mx-2 text-light" href="message.php">Message</a>
            </nav>
        </div>
        <div class="col-md-4">
            <div class="nav pr-center-1">
            <a class="mx-2 nav-link">Welcome, <?php echo $_SESSION['setusername'] ?></a>
            <a class="mx-2 btn btn-danger" href="logout.php">Logout <i class="fa-solid fa-right-to-bracket"></i></a>
            </div>
        </div>
    </div>
</div>