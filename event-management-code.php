<?php
    if(isset($_SESSION['register_id'])){

      $club_user_table = "_cb_".strtolower(str_ireplace(' ','',str_ireplace('club','',$_GET['cc_name'])));

      $event_query = "SELECT * FROM `$club_user_table` WHERE joiner_id = '{$_SESSION['register_id']}' AND joiner_role='Director'";
      $event_output = mysqli_query($conn,$event_query);

      if(mysqli_num_rows($event_output)){
        echo "<a href='eventdashboard?club=".$_GET['cc_name']."&c_id=".$_GET['club_id']."' class='btn btn-danger'>Club Management</a>";
      }
    }
?>