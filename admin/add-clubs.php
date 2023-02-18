<?php  
    include "master-file.php";
    include "admin-header.php"
?>

<div class="container">
    <div class="row mt-4">
        <div class="col-md-12">
            <h2 class="bg-dark border rounded text-center text-light p-2">Verify Club Request</h2>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12 pr-center">
            <?php
            $sql_qr = "SELECT * FROM `club_info` WHERE verify = 0";
            $output_qr = mysqli_query($conn,$sql_qr);

            if(mysqli_num_rows($output_qr)>0){
                while($data = mysqli_fetch_assoc($output_qr)){
            ?>
            <div class="card custom-card-1 m-3">
                <div class="card-body">
                    <h5 class="card-title">Club Name: <?php echo $data['club_name']; ?></h5>
                    <a href="club-add-view.php?reg_id=<?php echo $data['id']; ?>" class="btn btn-primary">View details</a>
                </div>
            </div>
            <?php
                }
            }
            ?>
        </div>
    </div>
</div>