<?php
 include "master-file.php";

 $rj_id = $_GET['rj_id'];

 $drop_club = "DELETE FROM `club_info` WHERE id = '{$rj_id}'";
 $drop_club_query = mysqli_query($conn,$drop_club);

 if($drop_club_query){
    echo "<script>alert('Club Rejected❌')</script>";
    redirect('add-clubs.php');
 }

?>