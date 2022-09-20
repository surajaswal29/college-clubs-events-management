<?php 
  include "master.php";
  include "header.php";
?>
    <!-- HNBGU Council sub Banner -->
    <!-- <section id="banner">
       <div class="sub-banner item-3"></div>
    </section> -->
    <!-- HNBGU Council Event Lists -->
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
                      src="images/<?php echo $data['event_image']; ?>"
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
                 
                  <a href="join-event.html" class="join-event">Join Now</a>
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
                  <div class="recent-event-box border">
                    <div class="row">
                      <div class="col-md-12">
                        <div class="event-img">
                          <img
                            src="https://www.taylor.edu/dA/78efae8f8f/image/robotics-thumb.jpg"
                            alt="event images"
                          />
                        </div>
                      </div>
                      <div class="col-md-12">
                        <div class="event-meta">
                          <span
                            ><i class="fas fa-calendar-alt"></i>
                            22-06-2022</span
                          >
                          <span
                            ><i class="fas fa-users"></i> Computer Science
                            Club</span
                          >
                        </div>
                        <div class="event-description">
                          <span><strong>Name:</strong> Hackathon 1.0</span>
                          <span>
                            <strong>Venue</strong>: HEMVATI NANDAN BAHUGUNA
                            GARHWAL UNIVERSITY, Chaursa Campus
                          </span>
                          <span>
                            <strong>Start Date:</strong> 22-06-2022 |
                            <strong>End Date:</strong> 22-06-2022
                          </span>
                        </div>
                        <div class="event-join">
                          <!-- <a href="#" class="badge p-2 px-4">Join</a> -->
                          <a href="event-view.html" class="badge p-1 px-2 mb-2"
                            >View</a
                          >
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="recent-event-box border">
                    <div class="row">
                      <div class="col-md-12">
                        <div class="event-img">
                          <img src="images/hackathon.png" alt="event images" />
                        </div>
                      </div>
                      <div class="col-md-12">
                        <div class="event-meta">
                          <span
                            ><i class="fas fa-calendar-alt"></i>
                            22-06-2022</span
                          >
                          <span
                            ><i class="fas fa-users"></i> Computer Science
                            Club</span
                          >
                        </div>
                        <div class="event-description">
                          <span><strong>Name:</strong> Hackathon 1.0</span>
                          <span>
                            <strong>Venue</strong>: HEMVATI NANDAN BAHUGUNA
                            GARHWAL UNIVERSITY, Chaursa Campus
                          </span>
                          <span>
                            <strong>Start Date:</strong> 22-06-2022 |
                            <strong>End Date:</strong> 22-06-2022
                          </span>
                        </div>
                        <div class="event-join">
                          <!-- <a href="#" class="badge p-2 px-4">Join</a> -->
                          <a href="event-view.html" class="badge p-1 px-2 mb-2"
                            >View</a
                          >
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="recent-event-box border">
                    <div class="row">
                      <div class="col-md-12">
                        <div class="event-img">
                          <img src="images/hackathon.png" alt="event images" />
                        </div>
                      </div>
                      <div class="col-md-12">
                        <div class="event-meta">
                          <span
                            ><i class="fas fa-calendar-alt"></i>
                            22-06-2022</span
                          >
                          <span
                            ><i class="fas fa-users"></i> Computer Science
                            Club</span
                          >
                        </div>
                        <div class="event-description">
                          <span><strong>Name:</strong> Hackathon 1.0</span>
                          <span>
                            <strong>Venue</strong>: HEMVATI NANDAN BAHUGUNA
                            GARHWAL UNIVERSITY, Chaursa Campus
                          </span>
                          <span>
                            <strong>Start Date:</strong> 22-06-2022 |
                            <strong>End Date:</strong> 22-06-2022
                          </span>
                        </div>
                        <div class="event-join">
                          <!-- <a href="#" class="badge p-2 px-4">Join</a> -->
                          <a href="event-view.html" class="badge p-1 px-2 mb-2"
                            >View</a
                          >
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </main>
    </section>
    <!-- Footer -->
    <?php include "footer.php" ?>
  </body>
</html>
