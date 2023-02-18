<?php
 include "master-file.php";

 $up_id = $_GET['up_id'];
 $club = $_GET['c_name'];

 $club_table = '_cb_'.strtolower(str_ireplace(' ','',str_ireplace('club','',$club)));
 

 $up_club = "UPDATE `club_info` SET `verify` = '1',`club_table`='{$club_table}' WHERE `id` = '{$up_id}'";
 $up_club_query = mysqli_query($conn,$up_club);

 if($up_club_query){

   echo $create_club_table = "CREATE TABLE `$club_table`(
                           id INT(11) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
                           joiner_id VARCHAR(200) NOT NULL,
                           joiner_name VARCHAR(200) NOT NULL,
                           joiner_course VARCHAR(200) NOT NULL,
                           joiner_role VARCHAR(100) NOT NULL,
                           joined_on TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP)";
   $create_club_table_query=mysqli_query($conn,$create_club_table);

   if($create_club_table_query){
      echo "<script>alert('Club Added Successfully✅')</script>";
      redirect('add-clubs.php');
   }
 }

?>