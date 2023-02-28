<?php 
include "master-file.php";

// Delete Query
$drop = "DELETE FROM `{$_SESSION['club_id']}` WHERE `joiner_id` = '{$_GET['id']}'";
$result = mysqli_query($conn,$drop);

if($result){
    redirect('club-members.php?cid='.$_SESSION['club_id']);
}

?>