<?php

    include "master.php";

    $drop_event = "DROP TABLE `{$_GET['event_table']}`";
    $drop_event_query = mysqli_query($conn,$drop_event);

    if($drop_event_query){
        $delete_event =  "DELETE FROM `event-list` WHERE `event-list`.`id` = '{$_GET['ev_id']}'";
        $delete_event_query = mysqli_query($conn,$delete_event);

        if($delete_event_query){
            redirect('eventdashboard?club='.$_GET['club_name'].'&c_id='.$_GET['c_id']);
        }
    }

?>