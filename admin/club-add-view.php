<?php  
    include "master-file.php";
    include "admin-header.php";

    $club_id=$_GET['reg_id'];
    $sql_student = "SELECT * FROM club_info WHERE id='{$club_id}'";
    $output_student = mysqli_query($conn,$sql_student);

    if(mysqli_num_rows($output_student)>0){
        $data = mysqli_fetch_assoc($output_student);
?>

<div class="form-wrap mt-5">
      <div class="container shadow">
        <div class="row">
          <div class="col-md-12 m-2 p-0 form-heading">
            <h1 class="btn-block">Club Details</h1>
          </div>
        </div>
        <div
          class="row justify-content-center align-items-center display-none"
          id="signup"
        >
          <div class="col-md-12">
            <form action="#" method="post" class="form p-md-5">
              <div class="row">
                <div class="col-md-12 mt-3 mt-3">
                  <h4 for="username">Club Name</h4>
                  <p class="form-control"><?php echo $data['club_name']; ?></p>
                </div>
              </div>
              <div class="row">
                <div class="col-md-7 mt-3">
                  <h4 for="password">Club Requirement</h4>
                  <p class="form-control"><?php echo $data['club_requirement']; ?></p>
                </div>
                <div class="col-md-5 mt-3 mt-3">
                  <h4 for="username">Club Banner</h4>
                  <img src="<?php echo '../upload-image/'.$data['c_image']; ?>" alt="Club banner" class="img-fluid" style="height:250px">
                </div>
                <!-- <input disabled type="text" class="form-control"> -->
              </div>
              <div class="row">
                    <div class="col-md-12 mt-3">
                        <h4 for="password">Club Description</h4>
                        <?php echo $data['club_description']; ?>
                    </div>
              </div>
              <div class="row">
                <div class="col-md-12">
                    <div class="nav">
                        <a href="verify-update-club.php?up_id=<?php echo $data['id'].'&c_name='.$data['club_name']; ?>" class="text-light nav-link rounded bg-success">Verify</a>
                        <a href="reject-update-club.php?rj_id=<?php echo $data['id']; ?>" class="text-light nav-link rounded mx-4 bg-danger">Reject</a>
                    </div>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </body>
</html>
<?php
    }
?>