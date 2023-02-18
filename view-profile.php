<?php 
  include "master.php";
  include "header.php";
//   $student_id=$_GET['reg_id'];
  $sid=$_GET['id'];

    $sql_student = "SELECT * FROM users WHERE id='{$sid}'";
    $output_student = mysqli_query($conn,$sql_student);

    if(mysqli_num_rows($output_student)>0){
        $data = mysqli_fetch_assoc($output_student);
?>

<div class="form-wrap">
      <div class="container shadow">
        <div class="row">
          <div class="col-md-12 p-0 form-heading">
            <h1 class="btn-block">User Profile</h1>
          </div>
        </div>
        <div
          class="row justify-content-center align-items-center display-none"
          id="signup"
        >
          <div class="col-md-12 bg-profile">
            <form action="#" method="post" class="form p-md-5">
              <div class="row">
                <div class="col-md-12 mt-3 mt-3">
                  <label for="username">Name</label>
                  <input disabled type="text" name="email" value="<?php echo $data['firstname']." ".$data['lastname']; ?>" class="form-control input-white" />
                </div>
              </div>
              <div class="row">
                <div class="col-md-6 mt-3">
                  <label for="password"
                    >Email</label
                  >
                  <input disabled type="text" name="email" value="<?php echo $data['email']; ?>" class="form-control input-white" />
                </div>
                <div class="col-md-6 mt-3">
                  <label for="password"
                    >Contact Number</label
                  >
                  <input disabled type="number" name="phone" value="<?php echo $data['phone']; ?>" class="form-control" />
                </div>
                <!-- <input disabled type="text" class="form-control"> -->
              </div>
              <div class="row">
                <div class="col-md-6 mt-3">
                  <label for="password"
                    >Department</label
                  >
                  <input disabled type="text" name="department" value="<?php echo $data['department']; ?>" class="form-control" />
                </div>
                <div class="col-md-1 mt-3">
                  <label for="password"
                    >Course</label
                  >
                  <input disabled type="text" name="year" value="<?php echo $data['course']; ?>" class="form-control" />
                </div>
                <div class="col-md-1 mt-3">
                  <label for="password"
                    >Year</label
                  >
                  <input disabled type="text" name="year" value="<?php echo $data['year']; ?>" class="form-control" />
                </div>
                <div class="col-md-1 mt-3">
                  <label for="semester"
                    >Semester</label
                  >
                  <input disabled type="text" name="semester" value="<?php echo $data['semester']; ?>" class="form-control" />
                </div>
                <div class="col-md-3 mt-3">
                  <label for="council"
                    >Roll No<span
                      class="imp-op"
                      >*</span
                    ></label
                  >
                  <input disabled type="text" name="council" value="<?php echo $data['roll_no']; ?>" class="form-control" />
                </div>
                <!-- <input disabled type="text" class="form-control"> -->
              </div>
              

              <div class="row">
                <div class="col-md-6 mt-3">
                  <label for="Social"
                    >Social Media Link
                    </label
                  >
                  <input type="url" name="social" value="<?php echo $data['social']; ?>" class="form-control" disabled/>
                </div>
                <div class="col-md-6 mt-3">
                  <label for="aoi"
                    >Area of Interest
                    </label
                  >
                  <input name="aoi" id="aoi" value="<?php echo $data['aoi']; ?>" class="form-control" disabled/>
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

<?php include "footer.php"?>