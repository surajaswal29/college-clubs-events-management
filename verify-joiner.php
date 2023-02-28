<?php 
include "master.php";

// Delete Query
$update = $sql = "UPDATE `{$_GET['ev_table']}` SET `verified` = '1' WHERE `id` = '{$_GET['j_id']}'";
$result = mysqli_query($conn,$update);

if($result){
    redirect('joiners-details.php?ev_id='.$_GET['ev_id'].'&ev_type='.$_GET['ev_type'].'&ev_table='.$_GET['ev_table'].'&ev_name='.$_GET['ev_name']);

}

?>