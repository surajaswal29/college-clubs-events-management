<?php

    // echo $club_name;
    $club_tb = '_cb_'.str_ireplace(' ','',strtolower(str_ireplace('club','',$club_name)));

    // echo $club_tb;

    $club_members_query= "SELECT * FROM `{$club_tb}`";
    $club_members_output = mysqli_query($conn,$club_members_query);

    if(mysqli_num_rows($club_members_output)>0){
        while($club_members_data = mysqli_fetch_assoc($club_members_output)){

?>
    <div class="single-member">
        <div class="row">
            <div class="col-3 pr-center">
                <img src="images/profile-icon.jpg" alt="profile">
            </div>
            <div class="col-9 ">
                <span>Name: <?php echo $club_members_data['joiner_name']; ?></span>
                <span>Role: <?php echo $club_members_data['joiner_role']; ?></span>
            </div>
        </div>
    </div>
<?php
        }
    }else{
        echo '<div class="single-member">No members yet</div>';
    }
?>