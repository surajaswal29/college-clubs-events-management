<?php

    include "master-file.php";

    $ssid_kil = session_destroy();

    if($ssid_kil){
        redirect('index.php');
    }else{
        echo"Something Went Wrong!";
    } 

?>