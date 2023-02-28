<?php  
    include "master-file.php";

    // Update Query
    $sql = "UPDATE `{$_SESSION['club_id']}` SET `joiner_role` = 'Director' WHERE joiner_id = '{$_GET['id']}'";
    $result =mysqli_query($conn,$sql);

    if($result){
        redirect('club-members.php?cid='.$_SESSION['club_id']);
    }
?>