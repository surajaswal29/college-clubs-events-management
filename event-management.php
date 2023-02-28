<?php 
  include "master.php";
  include "header.php";

  if(isset($_POST['submit'])){
      $e_name = mysqli_real_escape_string($conn, $_POST['event_name']);
      $e_venue = $_POST['event_venue'];
      $s_date = $_POST['start_date'];
      $e_date = $_POST['end_date'];
      $e_type = $_POST['etype'];
      $ev_fee = $_POST['ev_fee'];
      $description =mysqli_real_escape_string($conn, $_POST['desc']);
      $date = date('Y-m-d');

      $tb_event_name = strtolower(str_ireplace(' ','',$e_name));
      $table_event = '_tb_'.$tb_event_name;


      $image_name = $_FILES['event_image']['name'];
      $file_type = $_FILES['event_image']['type'];
      $temp_name = $_FILES['event_image']['tmp_name'];
      $image_size = $_FILES['event_image']['size'];  

      $destination = 'upload-image/'.$image_name;

      // checking event duplicacy
      $check_ev = "SELECT * FROM `event-list` WHERE `event_name`='{$e_name}'";
      $check_ev_query = mysqli_query($conn,$check_ev);

      if(mysqli_num_rows($check_ev_query)>0){
        echo"<script>alert('Event already exist!')</script>";
        // redirecting if event already exist
        redirect('eventmanagement?club='.$_SESSION['club']);
      }else{
          // uploading Event Image and payment QR Code
          if(move_uploaded_file($temp_name, $destination)){

            if(!empty($_FILES['upi_qr']['name'])){
              $p_image_name = $_FILES['upi_qr']['name'];
              $p_file_type = $_FILES['upi_qr']['type'];
              $p_temp_name = $_FILES['upi_qr']['tmp_name'];
              $p_image_size = $_FILES['upi_qr']['size'];
      
              $paymentQR_destination='payment-QR/'.$p_image_name;

              if(!move_uploaded_file($p_temp_name, $paymentQR_destination)){
                echo"error";
                die();
              }
            }
            
            echo $query = "INSERT INTO `event-list` 
                    (`event_name`, `event_venue`, `organizer`,`event_type`, `description`, `start_date`, `end_date`, `event_image`,`e_qr`,`ev_fee`,`event_table`, `date`) 
                    VALUES 
                    ('{$e_name}', '{$e_venue}', '{$_SESSION['club']}','{$e_type}', '{$description}', '{$s_date}', '{$e_date}', '{$image_name}','{$p_image_name}','{$ev_fee}','{$table_event}', '{$date}')";
            $output = mysqli_query($conn,$query);

            if($output){
              try{
                $createEventTable = 
                  "CREATE TABLE `$table_event`(
                      id INT(10) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
                      joiner_id VARCHAR(100) NOT NULL,
                      joiner_name VARCHAR(100) NOT NULL,
                      joiner_email VARCHAR(100) NOT NULL,
                      order_id VARCHAR(100) NULL,
                      verified INT(1) NULL,
                      joinDate TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
                  )";
                $createTableQuery = mysqli_query($conn,$createEventTable);
                  if($createTableQuery){
                    echo"<script>alert('Event Created Successfully✅!')</script>";
                    redirect('eventmanagement?club='.$_SESSION['club']);
                  }
              }catch(Exception $e){
                  echo"<script>alert('Event already exist!')</script>";
              }
            }else{
              echo"Error";
            }
          }else{
            echo"Error!";
          }
      }
  }
?>
<div class="form-wrap">
      <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="home">Home</a></li>
          <li class="breadcrumb-item">
              <a href="clubs?cc_name=<?php echo $_SESSION['club'].'&club_id='.$_SESSION['club_id'];  ?>"><?php echo $_SESSION['club']; ?></a>
          </li>
          <li class="breadcrumb-item"><a href="eventdashboard?club=<?php echo $_SESSION['club'].'&c_id='.$_SESSION['club_id']; ?>">Dashboard</a></li>
          <li class="breadcrumb-item active" aria-current="page">Add Event</li>
        </ol>
      </nav>
      <div class="row">
        <div class="col-md-2">
          <ul class="side-dash">
              <li class="bg-primary"><a class="py-2 text-decoration-none text-light d-block m-0" href="eventdashboard?club=<?php echo $_SESSION['club'].'&c_id='.$_SESSION['club_id']; ?>" >Dashboard</a></li>
              <li class="bg-primary"><a class="py-2 text-decoration-none text-light d-block m-0" href="event-management.php">Add Event</a></li>
              <!-- <li>Joiner</li> --> 
            </ul>
        </div>
        <div class="col-md-10">
          <div class="container shadow">
            <div class="row">
              <div class="col-md-12 m-0 p-0 form-heading">
                <h1 class="btn-block">Add Event</h1>
              </div>
            </div>
            <div class="row justify-content-center align-items-center display-none" id="signup">
              <div class="col-md-12">
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
                    <div class="col-md-2 mt-3">
                      <label for="start">Start Date<span class="imp-op">*</span></label>
                      <input required type="date" name="start_date" class="form-control" />
                    </div>
                    <div class="col-md-2 mt-3">
                      <label for="end">End Date<span class="imp-op">*</span></label>
                      <input required type="date" name="end_date" class="form-control" />
                    </div>
                    <div class="col-md-1 mt-3">
                        <label for="council">Type <span class="imp-op" >*</span ></label>
                        <select name="etype" id="etype" class="form-control">
                          <option value="free">Free</option>
                          <option value="paid">Paid</option>
                          <!-- <option value=""></option> -->
                        </select>
                    </div>
                    <div class="col-md-1 mt-3">
                        <label for="council">Fee</label>
                        <input type="number" name="ev_fee" id="ev_fee" class="form-control">
                    </div>
                    <div class="col-md-3 mt-3">
                      <label for="event_image">Event Image<span class="imp-op">*</span></label>
                      <input required type="file" name="event_image" id="event_image" class="form-control" />
                    </div>
                    <div class="col-md-3 mt-3 paid-hide" id="qr-img">
                        <label for="event_image">Payment QR Code<span class="imp-op">*</span></label>
                        <input  type="file" name="upi_qr" id="qr_img" class="form-control" />
                    </div>
                  </div>
                  <div class="row">
                        <div class="col-md-12 mt-3">
                          <label for="desc">Event Description<span class="imp-op">*</span></label>
                          <textarea class="form-control" id="editor" name='desc' placeholder="Mention Details of event."></textarea>
                        </div>
                  </div>
                  
                  <div class="row">
                    <div class="col-md-12 mb-3">
                      <button required name="submit" type="submit" class="form-control mt-4 bg-success text-light" >
                        Submit
                      </button>
                    </div>
                    
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
</div>