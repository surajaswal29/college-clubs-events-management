<?php 
  include "master.php";
  include "header.php";
?>
    <!-- HNBGU Council sub Banner -->
    <!-- <section id="banner">
            <div class="sub-banner item-3"></div>
        </section> -->
    <!-- HNBGU Council Event Lists -->
    <div class="club-banner">
      <img src="images/event-banner.jpg" alt="Club Banner">
    </div>
      <!-- <div class="container club-sub"> -->
    <section id="event-list" class="container-fluid">
      <main  class="container club-sub">
        <div class="row">
          <div class="col-md-8">
            <div class="row mt-5 border py-3">
              <?php include "events-component.php"; ?>
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
                  <h2>Recent Events</h2>
                  <div class="recent-event-box border">
                    <div class="row">
                      <div class="col-md-12">
                        <div class="event-img">
                          <img
                            src="https://media.istockphoto.com/vectors/hackathon-banner-illustration-abstract-futuristic-background-with-vector-id1213258486?k=20&m=1213258486&s=612x612&w=0&h=VAGuLo8tudThWWKQefdymlnqMwjGm0Elt8x_8fRpZK4="
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
                          <img
                            src="https://www.writersdigest.com/.image/t_share/MTkwMDMxMzgzNjcyOTIzOTAy/wd-90th-annual-2022-launchlogos-1100x615jpg-ext.jpg"
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
                            ><i class="fas fa-users"></i> Writting Club</span
                          >
                        </div>
                        <div class="event-description">
                          <span
                            ><strong>Name:</strong> Writting Compeietion</span
                          >
                          <span>
                            <strong>Venue</strong>: HEMVATI NANDAN BAHUGUNA
                            GARHWAL UNIVERSITY, Chaursa Campus
                          </span>
                          <span>
                            <strong>Start Date:</strong> 23-07-2022 |
                            <strong>End Date:</strong> 23-07-2022
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
                            ><i class="fas fa-users"></i> Robotics Club</span
                          >
                        </div>
                        <div class="event-description">
                          <span
                            ><strong>Name:</strong> Robotics Competition</span
                          >
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
    <?php include "footer.php"?>
  </body>
</html>
