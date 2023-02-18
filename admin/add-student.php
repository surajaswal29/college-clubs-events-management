<?php  
    include "master-file.php";
    include "admin-header.php"
?>

<div class="container">
    <div class="row mt-4">
        <div class="col-md-12">
            <h2 class="bg-dark border rounded text-light px-2 py-1">Verify Student</h2>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12 pr-center">
            <?php
            $sql_qr = "SELECT * FROM `users` WHERE verified = '0'";
            $output_qr = mysqli_query($conn,$sql_qr);

            if(mysqli_num_rows($output_qr)>0){
                while($data = mysqli_fetch_assoc($output_qr)){
            ?>
            <div class="card custom-card m-3">
                <div class="card-body">
                    <h4 class="card-title">Name: <?php echo $data['firstname'].' '.$data['lastname'] ?></h4>
                    <p class="card-text">Reg ID: <?php echo $data['reg_id']; ?></p>
                    <p class="card-text">Club: <?php echo $data['club']; ?></p>
                    <p class="card-text">Email: <?php echo $data['email']; ?></p>
                    <p class="card-text">Phone: <?php echo $data['phone']; ?></p>
                    <a href="student-add-view.php?reg_id=<?php echo $data['reg_id']; ?>" class="btn btn-primary">View details</a>
                </div>
            </div>
            <?php
                }
            }
            ?>
        </div>
    </div>
</div>