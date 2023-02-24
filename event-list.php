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
      <img src="https://res.cloudinary.com/dc8yxs895/image/upload/v1676539562/audi2_hqsoxy.jpg" alt="Club Banner">
    </div>
      <!-- <div class="container club-sub"> -->
    <section id="event-list" class="container-fluid">
      <main  class="container club-sub club-sub-1">
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
                  <?php include "recent-event.php"; ?>
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
