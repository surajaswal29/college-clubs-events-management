<?php 
  include "master.php";
  include "header.php";
  // echo bin2hex(random_bytes(16));
?>

<?php
  if(isset($_POST['submit'])){
      $c_name = $_POST['club_name'];
      $c_depart = $_POST['club_depart'];
      $c_school = $_POST['club_school'];
     
      $s_description =mysqli_real_escape_string($conn, $_POST['club_description']);
      $date = date('Y-m-d');

      $image_name = $_FILES['event_image']['name'];
      $file_type = $_FILES['event_image']['type'];
      $temp_name = $_FILES['event_image']['tmp_name'];
      $image_size = $_FILES['event_image']['size'];  

      $destination = 'upload-image/'.$image_name;
      if(move_uploaded_file($temp_name, $destination)){
        $query = "INSERT INTO `club_info` 
                (`club_name`, `department`, `club_description`,`c_image`,`school`,`date`) 
                VALUES 
                ('{$c_name}', '{$c_depart}', '{$s_description}','{$image_name}','{$c_school}' ,'{$date}')";
        $output = mysqli_query($conn,$query);

        if($output){
          redirect('clubregistration');
        }else{
          echo"Error";
        }
      }else{
        echo"Error!";
      }
  }
?>
<div class="form-wrap">
      <div class="container shadow">
        <div class="row">
          <div class="col-md-12 m-0 p-0 form-heading">
            <h1 class="btn-block">Add Club</h1>
          </div>
        </div>
        <div
          class="row justify-content-center align-items-center display-none"
          id="signup"
        >
          <div class="col-md-12">
            <form action="clubregistration" method="post" class="form p-md-5" enctype="multipart/form-data">
              <div class="row">
                <div class="col-md-6 mt-3 mt-3">
                  <label for="club_name">Club Name<span class="imp-op">*</span></label>
                  <input required type="text" name="club_name" class="form-control" />
                </div>
                <div class="col-md-6 mt-3 mt-3">
                  <label for="club_depart">Department<span class="imp-op">*</span></label>
                  <input required type="text" name="club_depart" class="form-control" />
                </div>
              </div>
              <div class="row">
                
                <div class="col-md-6 mt-3">
                  <label for="end">School<span class="imp-op">*</span></label>
                  <input required type="text" name="club_school" class="form-control" />
                </div>
              
                
                <div class="col-md-6 mt-3">
                  <label for="event_image"
                    >Club banner<span class="imp-op">*</span></label
                  >
                  <input required type="file" name="event_image" id="event_image" class="form-control" />
                </div>
              </div>
               <div class="row">
                    <div class="col-md-12 mt-3">
                      <label for="desc"
                        >Club Description<span class="imp-op">*</span></label
                      >
                      <textarea class="form-control" id="editor" style="height:300px;" name='club_description'></textarea>
                    </div>
                </div>
              
              <div class="row">
                <div class="col-md-12 mb-3">
                  <button
                    required
                    name="submit"
                    type="submit"
                    class="form-control mt-4"
                    >
                    Submit
                  </button>
                </div>
                
              </div>
            </form>
          </div>
        </div>
      </div>
</div>