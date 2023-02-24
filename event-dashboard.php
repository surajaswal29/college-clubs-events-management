<?php

  include "master.php";
  include "header.php";

  $_SESSION['club'] = $_GET['club'];
  $_SESSION['club_id'] = $_GET['c_id'];

  $view_ev = "SELECT * FROM `event-list` WHERE organizer='{$_GET['club']}'";
  $view_ev_query = mysqli_query($conn,$view_ev);

?>
<div class="container">
    <div class="row">
       <div class="col-md-12 mt-3">
          <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="home">Home</a></li>
              <li class="breadcrumb-item">
                <a href="clubs?cc_name=<?php echo  $_GET['club'].'&club_id='.$_GET['c_id'];  ?>"><?php echo $_SESSION['club']; ?></a>
              </li>
              <li class="breadcrumb-item">eventdashboard</li>
            </ol>
          </nav>
          <div class="row">
            <div class="col-md-12">
              <h1>Event Management Dashboard</h1>
            </div>
          </div>
       </div>
    </div>
    <div class="row mt-4">
        <div class="col-md-2">
            <ul class="side-dash">
              <li class="bg-primary"><a class="py-2 text-decoration-none text-light d-block m-0" href="eventdashboard?club=<?php echo $_SESSION['club'].'&c_id='.$_SESSION['club_id']; ?>" >Dashboard</a></li>
              <li class="bg-primary"><a class="py-2 text-decoration-none text-light d-block m-0" href="event-management.php">Add Event</a></li>
              <!-- <li>Joiner</li> --> 
            </ul>
        </div>
        <div class="col-md-10">
            <table class="table table-bordered table-responsive mt-2">
                <tr class="bg-secondary text-light">
                    <th>ID</th>
                    <th>Event Name</th>
                    <th>Venue</th>
                    <th>Start Date</th>
                    <th>End Date</th>
                    <th>Edit/Delete</th>
                </tr>
                <?php
                  if(mysqli_num_rows($view_ev_query)){
                    while($event_data = mysqli_fetch_assoc($view_ev_query)){
                      echo'
                      <tr>
                        <td>'.$event_data['id'].'</td>
                        <td>'.$event_data['event_name'].'</td>
                        <td>'.$event_data['event_venue'].'</td>
                        <td>'.$event_data['start_date'].'</td>
                        <td>'.$event_data['end_date'].'</td>
                        <td class="pr-center">
                          <a href="edit-event.php" class="text-primary mx-2"><i class="fa-solid fa-pen-to-square"></i></a>  | <a href="delete-event.php" class="text-danger mx-2"><i class="fa-solid fa-trash"></i></a>
                        </td>
                      </tr>
                      ';
                    }
                  }
                ?>
            </table>
        </div>
    </div>
</div>