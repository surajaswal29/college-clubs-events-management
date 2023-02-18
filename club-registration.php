<?php 
  include "master.php";
  include "header.php";
  // echo bin2hex(random_bytes(16));
?>

<?php
  if(isset($_POST['submit'])){
      $c_name = $_POST['club_name'];
     
      $s_description =mysqli_real_escape_string($conn, $_POST['club_description']);
      $s_requirement = mysqli_real_escape_string($conn, $_POST['club_requirement']);
      $date = date('Y-m-d');

      $image_name = $_FILES['event_image']['name'];
      $file_type = $_FILES['event_image']['type'];
      $temp_name = $_FILES['event_image']['tmp_name'];
      $image_size = $_FILES['event_image']['size'];  

      $destination = 'upload-image/'.$image_name;
      if(move_uploaded_file($temp_name, $destination)){
        $query = "INSERT INTO `club_info` 
                (`club_name`, `club_description`,`club_requirement`,`c_image`,`date`) 
                VALUES 
                ('{$c_name}', '{$s_description}','{$s_requirement}','{$image_name}' ,'{$date}')";
        $output = mysqli_query($conn,$query);

        if($output){
          echo "<script>alert('Club registration request added Successfully✅')</script>";
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
            <h1 class="btn-block">Submit Club Registration Request</h1>
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
                <div class="col-md-6 mt-3">
                  <label for="event_image"
                    >Club banner<span class="imp-op">*</span></label
                  >
                  <input required type="file" name="event_image" id="event_image" class="form-control" />
                </div>
              </div>
              
              <div class="row">
                    <div class="col-md-12 mt-3">
                      <!-- <p class="text-danger mb-0">What is the requirement of this club? Mention in Club requirement field*</p> -->
                      <label for="desc"
                        >Club Requirement<span class="imp-op">*</span></label
                      >
                      <textarea class="form-control" style="height:60px;" name='club_requirement' placeholder="What is the requirement of this club?"></textarea>
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
                    class="form-control mt-4 bg-secondary text-light"
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