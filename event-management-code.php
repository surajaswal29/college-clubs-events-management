<?php
    if(isset($_SESSION['register_id'])){
      $event_query = "SELECT * FROM users WHERE reg_id = '{$_SESSION['register_id']}' AND role='director'";
      $event_output = mysqli_query($conn,$event_query);

      if(mysqli_num_rows($event_output)){
        echo "<a href='eventmanagement' class='btn btn-primary'>Event Management</a>";
      }
    }
?>