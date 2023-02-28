<?php 
include "master.php";

// Delete Query
$drop = "DELETE FROM `{$_GET['ev_table']}` WHERE `id` = '{$_GET['j_id']}'";
$result = mysqli_query($conn,$drop);

if($result){
    redirect('joiners-details.php?ev_id='.$_GET['ev_id'].'&ev_type='.$_GET['ev_type'].'&ev_table='.$_GET['ev_table'].'&ev_name='.$_GET['ev_name']);
    
}

?>