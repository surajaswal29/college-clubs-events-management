<?php  
    include "master-file.php";
    include "admin-header.php"
?>

<div class="container">
    <div class="row mt-4">
        <div class="col-md-12 ">
            <h1>All Clubs</h1>
            <div class="club-wrap mt-4">
                <?php
                    $e_query = "SELECT * FROM `club_info`";
                    $e_output = mysqli_query($conn,$e_query);

                    if(mysqli_num_rows($e_output)>0){
                        while($e_data = mysqli_fetch_assoc($e_output)){
                ?>
                <div class="club-info-box">
                    <div class="club-img">
                        <img src="../upload-image/<?php echo $e_data['c_image'] ?>" alt="Club">
                    </div>
                    <div class="club-info">
                        <h2><?php echo $e_data['club_name']; ?></h2>
                        
                        <a href="club-members.php?cid=<?php echo $e_data['club_table']; ?>" class="mt-2 btn btn-primary btn-sm">View members</a>
                    </div>
                </div>
                
                <?php
                        }
                    }
                ?>
            </div>
        </div>
    </div>
</div>