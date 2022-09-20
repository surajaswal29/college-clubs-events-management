<div class="col-md-12">
              <div class="event-container">
                <h2 class="pr-center-2"><span>Events</span> 
                
                <?php
                if(isset($_SESSION['register_id'])){
                  $event_query = "SELECT * FROM users WHERE reg_id = '{$_SESSION['register_id']}' AND role='club head'";
                  $event_output = mysqli_query($conn,$event_query);

                  if(mysqli_num_rows($event_output)){
                    echo "<a href='eventmanagement' class='btn btn-primary'>Event Management</a>";
                  }
                }
                ?>
                </h2>
                <?php
                  $event_view = 'SELECT * FROM `event-list`';
                  $event_output = mysqli_query($conn,$event_view);

                  if(mysqli_num_rows($event_output)){
                    while($data=mysqli_fetch_assoc($event_output)){
                ?>
                <div class="event-box">
                  <div class="row">
                    <div class="col-md-4">
                      <div class="event-img">
                        <img
                          src="upload-image/<?php echo $data['event_image'] ?>"
                          alt="event images"
                        />
                      </div>
                    </div>
                    <div class="col-md-8">
                      <div class="event-meta">
                        <span
                          ><i class="fas fa-calendar-alt"></i> <?php echo $data['date'] ?></span
                        >
                        <span><i class="fas fa-users"></i> <?php echo $data['organizer'] ?></span>
                      </div>
                      <div class="event-description mt-1">
                        <span><strong>Name:</strong> <?php echo $data['event_name'] ?></span>
                        <span>
                          <strong>Venue</strong>: <?php echo $data['event_venue'] ?>
                        </span>
                        <span>
                          <strong>Start Date:</strong> <?php echo $data['start_date'] ?> |
                          <strong>End Date:</strong> <?php echo $data['end_date'] ?>
                        </span>
                      </div>
                      <div class="event-join mt-1">
                        <a href="join_event" class="badge p-2 px-4">Join</a>
                        <a href="event_view?event_id=<?php echo $data['id']; ?>" class="badge p-2 px-4"
                          >View</a
                        >
                      </div>
                    </div>
                  </div>
                </div>
                <?php
                    }
                  }else{
                    echo"<h3 class='border p-4 border-dotted'>No Events added</h3>";
                  }
                ?>
              </div>
</div>