<?php 
  include "master.php";
  include "header.php";
?>
    <!-- HNBGU Council sub Banner -->
    <!-- <section id="banner">
       <div class="sub-banner item-3"></div>
    </section> -->
    <!-- HNBGU Council Event Lists -->
    <?php
    $club_name = $_GET['cc_name'];
    ?>
    <section id="event-details">
      <main class="container">
        <div class="row">
          <div class="col-md-8">
            <div class="row mt-5 border py-3">
              <div class="col-md-12">
                <div class="event-container-details">
                  <?php
                    $eventid = $_GET['event_id'];
                    $sql_query = "SELECT * FROM `event-list` WHERE id= '{$eventid}'";
                    $sql_output = mysqli_query($conn,$sql_query);

                    $data = mysqli_fetch_assoc($sql_output);
                  ?>
                  <div class="event-poster mb-3">
                    <img
                      src="upload-image/<?php echo $data['event_image']; ?>"
                      alt="event poster"
                      title="Event Poster"
                    />
                  </div>
                  <table class="table table-bordered">
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
                  </table>
                  <p>
                  <?php echo $data['description']; ?>
                  </p>
                 
                  <a href="<?php echo (isset($_SESSION['register_id'])) ? 'joinEvent?ev_id='.$eventid.'&ev_tb='.$data['event_table'] : 'login' ?>" class="join-event">Join Now</a>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="row mt-5">
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