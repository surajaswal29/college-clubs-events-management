<?php  
    include "master-file.php";
    include "admin-header.php";

    $student_id=$_GET['reg_id'];
    $sql_student = "SELECT * FROM users WHERE reg_id='{$student_id}'";
    $output_student = mysqli_query($conn,$sql_student);

    if(mysqli_num_rows($output_student)>0){
        $data = mysqli_fetch_assoc($output_student);
?>

<div class="form-wrap mt-5">
      <div class="container shadow">
        <div class="row">
          <div class="col-md-12 m-2 p-0 form-heading">
            <h1 class="btn-block">Student Details</h1>
          </div>
        </div>
        <div
          class="row justify-content-center align-items-center display-none"
          id="signup"
        >
          <div class="col-md-12">
            <form action="#" method="post" class="form p-md-5">
              <div class="row">
                <div class="col-md-6 mt-3 mt-3">
                  <label for="username"
                    >Firstname<span class="imp-op">*</span></label
                  >
                  <input disabled type="text" name="fname" value="<?php echo $data['firstname']; ?>" class="form-control" />
                </div>
                <div class="col-md-6 mt-3 mt-3">
                  <label for="username"
                    >Lastname<span class="imp-op">*</span></label
                  >
                  <input disabled type="text" value="<?php echo $data['lastname']; ?>" name="lname" class="form-control" />
                </div>
              </div>
              <div class="row">
                <div class="col-md-6 mt-3">
                  <label for="password"
                    >Email<span class="imp-op">*</span></label
                  >
                  <input disabled type="text" name="email" value="<?php echo $data['email']; ?>" class="form-control" />
                </div>
                <div class="col-md-6 mt-3">
                  <label for="password"
                    >Contact Number<span class="imp-op">*</span></label
                  >
                  <input disabled type="number" name="phone" value="<?php echo $data['phone']; ?>" class="form-control" />
                </div>
                <!-- <input disabled type="text" class="form-control"> -->
              </div>
              <div class="row">
                <div class="col-md-6 mt-3">
                  <label for="password"
                    >Department<span class="imp-op">*</span></label
                  >
                  <input disabled type="text" name="department" value="<?php echo $data['department']; ?>" class="form-control" />
                </div>
                <div class="col-md-3 mt-3">
                  <label for="password"
                    >Year<span class="imp-op">*</span></label
                  >
                  <input disabled type="text" name="year" value="<?php echo $data['year']; ?>" class="form-control" />
                </div>
                <div class="col-md-3 mt-3">
                  <label for="semester"
                    >Semester<span class="imp-op">*</span></label
                  >
                  <input disabled type="text" name="semester" value="<?php echo $data['semester']; ?>" class="form-control" />
                </div>
                <!-- <input disabled type="text" class="form-control"> -->
              </div>
              <div class="row">
                <div class="col-md-6 mt-3">
                  <label for="council"
                    >Council (Choose council which you want to join)<span
                      class="imp-op"
                      >*</span
                    ></label
                  >
                  <input disabled type="text" name="council" value="<?php echo $data['council']; ?>" class="form-control" />
                </div>
                <div class="col-md-6 mt-3">
                  <label for="club"
                    >Club (Choose club which you want to join)<span
                      class="imp-op"
                      >*</span
                    ></label
                  >
                  <input disabled type="text" name="club" value="<?php echo $data['club']; ?>" class="form-control" />
                </div>
              </div>

              <div class="row">
                <div class="col-md-6 mt-3">
                  <label for="Social"
                    >Social Media Link
                    <span class="imp-op">(optional)</span></label
                  >
                  <input type="url" name="social" value="<?php echo $data['social']; ?>" class="form-control" disabled/>
                </div>
                <div class="col-md-6 mt-3">
                  <label for="aoi"
                    >Area of Interest
                    <span class="imp-op">(optional)</span></label
                  >
                  <input name="aoi" id="aoi" value="<?php echo $data['aoi']; ?>" class="form-control" disabled/>
                </div>
              </div>
              
              <div class="row">
                <div class="col-md-4 mt-3">
                  <label for="Social"
                    >Role
                    <span class="imp-op">(Give Role to this student)</span></label
                  >
                  <input type="text" name="role_update" value="<?php echo $data['role']; ?>" class="form-control"/>
                  <input type="submit" name="update" value="Give Role & Register user" class="btn btn-primary mt-4">
                  <?php
                  if(isset($_POST['update'])){
                    $role = $_POST['role_update'];

                    $sql_role = "UPDATE users SET role='{$role}', verified='1' WHERE reg_id = '{$student_id}'";
                    $output_role = mysqli_query($conn,$sql_role);

                    if($output_role){
                        echo "<script>alert('Student Verified')</script>";
                        redirect('student-add-view.php?reg_id='.$student_id);
                    }else{
                        echo "Error!";
                    }
                  }
                  ?>
                </div>
                <div class="col-md-8 mt-3">
                  <label for="aoi"
                    >ID Card
                    <span class="imp-op">*</span></label
                  >
                  <div style="width:600px;">
                        <img src="../upload-image/<?php echo $data['id_card'];?>" alt="ID Card" class="img-fluid">
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