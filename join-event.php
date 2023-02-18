<?php 
  include "master.php";


    $event_id = $_GET['ev_id'];
    $event_tb= $_GET['ev_tb'];
    $date = date('Y-m-d');


    $check_already_joined = "SELECT * FROM `$event_tb` WHERE joiner_id = '{$_SESSION["register_id"]}'";
    $check_already_joined_query = mysqli_query($conn,$check_already_joined);

    if(mysqli_num_rows($check_already_joined_query)>0){
      echo"<script> alert('Event is already joined!'); </script>";
      redirect('home');
    }else{

    $joinEventSQL = "INSERT INTO `$event_tb` (`joiner_id`, `joiner_name`, `joiner_email`, `joinDate`) 
                     VALUES ('{$_SESSION['register_id'] }','{$_SESSION['user_name'] } {$_SESSION['last_name'] }','{$_SESSION['email'] }','{$date}')";
    $joinEventSQLQuery = mysqli_query($conn,$joinEventSQL);

    if($joinEventSQLQuery){
        echo"<script> alert('Event is successfully joined!'); </script>";
        redirect('home');
    }
  }
?>