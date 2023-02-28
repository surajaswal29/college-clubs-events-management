<?php 
  include "master.php";
  include "header.php";

  $club_name = $_GET['cc_name'];
  $eventid = $_GET['event_id'];

  $sql_query = "SELECT * FROM `event-list` WHERE id= '{$eventid}'";
  $sql_output = mysqli_query($conn,$sql_query);
  $data = mysqli_fetch_assoc($sql_output);
?>
    <section id="event-details">
      <main class="container">
        <div class="row">
          <div class="col-md-12 mt-3">
            <nav aria-label="breadcrumb">
              <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="home">Home</a></li>
                <?php
                  $clubINFO = "SELECT * FROM club_info WHERE club_name='{$club_name}'";
                  $clubINFOQuery = mysqli_query($conn,$clubINFO);

                  if($clubINFOQuery){
                    $cDATA = mysqli_fetch_assoc($clubINFOQuery);
                    echo '<li class="breadcrumb-item"><a href="clubs?cc_name='.$cDATA['club_name'].'&club_id='.$cDATA['id'].'">'.$cDATA['club_name'].'</a></li>';
                  }
                ?>
                <!-- <li class="breadcrumb-item"><a href="eventlist">Events</a></li> -->
                <li class="breadcrumb-item active" aria-current="page"><?php echo $data['event_name'] ?></li>
              </ol>
            </nav>
          </div>
          <div class="col-md-8">
            <div class="row mt-2 border py-3">
              <div class="col-md-12">
                <div class="event-container-details">
                  
                  <div class="event-poster mb-3">
                    <img
                      src="upload-image/<?php echo $data['event_image']; ?>"
                      alt="event poster"
                      title="Event Poster"
                    />
                  </div>
                  <table class="table table-bordered ev-table">
                    <tr>
                      <td>Event</td>
                      <td><?php echo $data['event_name']; ?></td>
                    </tr>
                    <tr>
                      <td>Venue</td>
                      <td>
                      <?php echo $data['event_venue']; ?>
                      </td>
                    </tr>
                    <tr>
                      <td>Start Date</td>
                      <td><?php echo $data['start_date']; ?></td>
                    </tr>
                    <tr>
                      <td>End Date</td>
                      <td><?php echo $data['end_date']; ?></td>
                    </tr>
                    <tr>
                      <td>Event Type</td>
                      <td style="text-transform:capitalize"><?php echo $data['event_type']; ?></td>
                    </tr>
                    <?php
                      if($data['event_type'] === 'paid'){
                        echo '<tr>
                                <td>Event Fee</td>
                                <td>
                                ₹'.$data['ev_fee'].'
                                </td>
                              </tr>';
                      }
                    ?>
                  </table>
                  <p>
                  <?php echo $data['description']; ?>
                  </p>
                 <?php
                  $_SESSION['QR-code'] = $data['e_qr'];
                  $_SESSION['event_fee'] = $data['ev_fee'];
                  $_SESSION['ev_id'] = $eventid;
                  $_SESSION['ev_table'] =$data['event_table'];
                  $_SESSION['club_name'] =$club_name;

                  if($data['event_type'] === 'paid'){
                    echo '<a href="paidEvent" class="join-event">Proceed to Join</a>';
                  }else{
                 ?>
                  <a href="<?php echo (isset($_SESSION['register_id'])) ? 'joinEvent?ev_id='.$eventid.'&ev_tb='.$data['event_table'] : 'login' ?>" class="join-event">Join Now</a>
                <?php
                  }
                ?>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="row mt-2">
              <div class="col-md-12">
                <div class="event-search border rounded">
                  <h2>Search Event</h2>
                  <form action="#">
                    <input
                      type="search"
                      name="search"
                      id="search"
                      class="form-control"
                      placeholder="Search here.."
                    />
                    <input
                      type="submit"
                      value="Search"
                      class="btn bg-secondary text-light"
                    />
                  </form>
                </div>
              </div>
            </div>
            <div class="row mt-4">
              <div class="col-md-12">
                <div class="recent-events border rounded">
                  <h2>Recent Event</h2>
                  <?php include "recent-event.php"; ?>
                </div>
              </div>
            </div>
          </div>
        </div>
      </main>
    </section>
<!-- Footer -->
<?php include "footer.php" ?>