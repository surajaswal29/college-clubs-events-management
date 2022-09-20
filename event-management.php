<?php 
  include "master.php";
  include "header.php";
?>
<?php
  if(isset($_POST['submit'])){
      $e_name = $_POST['event_name'];
      $e_venue = $_POST['event_venue'];
      $s_date = $_POST['start_date'];
      $e_date = $_POST['end_date'];
      $e_organizer = $_POST['club'];
      $description =mysqli_real_escape_string($conn, $_POST['desc']);
      $date = date('Y-m-d');

      $image_name = $_FILES['event_image']['name'];
      $file_type = $_FILES['event_image']['type'];
      $temp_name = $_FILES['event_image']['tmp_name'];
      $image_size = $_FILES['event_image']['size'];  

      $destination = 'upload-image/'.$image_name;
      if(move_uploaded_file($temp_name, $destination)){
        $query = "INSERT INTO `event-list` 
                (`event_name`, `event_venue`, `organizer`, `description`, `start_date`, `end_date`, `event_image`, `date`) 
                VALUES 
                ('{$e_name}', '{$e_venue}', '{$e_organizer}', '{$description}', '{$s_date}', '{$e_date}', '{$image_name}', '{$date}')";
        $output = mysqli_query($conn,$query);

        if($output){
          redirect('eventmanagement');
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
            <h1 class="btn-block">Add Event</h1>
          </div>
        </div>
        <div
          class="row justify-content-center align-items-center display-none"
          id="signup"
        >
          <div class="col-md-12">
           <!-- <?php 
            // echo"<pre>";
              // print_r($_FILES);
            // echo"</pre>";
           ?> -->
            <form action="eventmanagement" method="post" class="form p-md-5" enctype="multipart/form-data">
              <div class="row">
                <div class="col-md-6 mt-3 mt-3">
                  <label for="event_name">Event Name<span class="imp-op">*</span></label>
                  <input required type="text" name="event_name" class="form-control" />
                </div>
                <div class="col-md-6 mt-3 mt-3">
                  <label for="event_venue">Event Venue<span class="imp-op">*</span></label>
                  <input required type="text" name="event_venue" class="form-control" />
                </div>
              </div>
              <div class="row">
                <div class="col-md-6 mt-3">
                  <label for="start">Start Date<span class="imp-op">*</span></label>
                  <input required type="date" name="start_date" class="form-control" />
                </div>
                <div class="col-md-6 mt-3">
                  <label for="end">End Date<span class="imp-op">*</span></label>
                  <input required type="date" name="end_date" class="form-control" />
                </div>
                <!-- <input required type="text" class="form-control"> -->
              </div>
              <div class="row">
                <div class="col-md-6 mt-3">
                    <label for="council"
                        >Organizer<span
                        class="imp-op"
                        >*</span
                        ></label
                    >
                    <select name="club" id="club" class="form-control">
                        <option value="00">Choose Club</option>
                        <option
                        value="Computer Science Club
                        "
                        >
                        Computer Science Club
                        </option>
                        <option
                        value="Electrical Club
                        "
                        >
                        Electrical Club
                        </option>
                        <option
                        value="Robotics and Instrumental Club
                        "
                        >
                        Robotics and Instrumental Club
                        </option>
                        <option
                        value="Designing Club
                        "
                        >
                        Designing Club
                        </option>
                        <option
                        value="Mechanical Club
                        "
                        >
                        Mechanical Club
                        </option>

                        <option value="Language Club">Language Club</option>
                        <option value="Reading Club">Reading Club</option>
                        <option value="Writing Club">Writing Club</option>
                        <option value="Debate Club">Debate Club</option>
                        <option value="Drama Club">Drama Club</option>
                        <option value="Music Club">Music Club</option>
                        <option value="Poetry Club">Poetry Club</option>
                        <option value="Script Writing Community">
                        Script Writing Community
                        </option>
                        <option value="Video and Media Club">
                        Video and Media Club
                        </option>
                        <option value="Anchor Community">Anchor Community</option>
                        <!-- <option value=""></option> -->
                        <!-- <option value=""></option> -->
                    </select>
                    </div>
                <div class="col-md-6 mt-3">
                  <label for="event_image"
                    >Event Image<span class="imp-op">*</span></label
                  >
                  <input required type="file" name="event_image" id="event_image" class="form-control" />
               </div>
               <div class="row">
                    <div class="col-md-12 mt-3">
                      <label for="desc"
                        >Event Description<span class="imp-op">*</span></label
                      >
                      <textarea class="form-control" id="editor" style="height:300px;" name='desc'></textarea>
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