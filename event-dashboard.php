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
              <li class="breadcrumb-item">Dashboard</li>
            </ol>
          </nav>
          <div class="row">
            <div class="col-md-12">
              <h1 class="font-00001">Dashboard | All Events List</h1>
            </div>
          </div>
       </div>
    </div>
    <div class="row mt-4">
        <div class="col-md-2">
            <ul class="side-dash">
              <li class="bg-primary"><a class="py-2 text-decoration-none text-light d-block m-0" href="eventdashboard?club=<?php echo $_SESSION['club'].'&c_id='.$_SESSION['club_id']; ?>" >Dashboard</a></li>
              <li class="bg-primary"><a class="py-2 text-decoration-none text-light d-block m-0" href="event-management.php">Add Event</a></li>
              <li class="bg-primary"><a class="py-2 text-decoration-none text-light d-block m-0" href="event-management.php">Manage Gallery</a></li>
              <!-- <li>Joiner</li> --> 
            </ul>
        </div>
        <div class="col-md-10 table-responsive-md">
            <table class="table table-bordered  mt-2">
                <tr class="bg-dark text-light">
                    <th>ID</th>
                    <th>Event Name</th>
                    <th>Venue</th>
                    <th>Type</th>
                    <th>Start Date</th>
                    <th>End Date</th>
                    <th>Action</th>
                    <th>Status</th>
                </tr>
                <?php
                  if(mysqli_num_rows($view_ev_query)>0){
                    while($event_data = mysqli_fetch_assoc($view_ev_query)){
                      echo'
                      <tr>
                        <td>'.$event_data['id'].'</td>
                        <td>'.$event_data['event_name'].'</td>
                        <td>'.$event_data['event_venue'].'</td>
                        <td>'.$event_data['event_type'].'</td>
                        <td>'.$event_data['start_date'].'</td>
                        <td>'.$event_data['end_date'].'</td>
                        <td class="pr-center">
                          <a href="edit-event.php?ev_id='.$event_data['id'].'" class="text-primary mx-2"><i class="fa-solid fa-pen-to-square"></i></a>  | <a href="delete-event.php?ev_id='.$event_data['id'].'&event_table='.$event_data['event_table'].'&club_name='.$_GET['club'].'&c_id='.$_GET['c_id'].'" class="text-danger mx-2"><i class="fa-solid fa-trash"></i></a>
                        </td>
                        <td>
                          <a href="joiners-details.php?ev_id='.$event_data['id'].'&ev_type='.$event_data['event_type'].'&ev_table='.$event_data['event_table'].'&ev_name='.$event_data['event_name'].'" class="btn btn-sm text-light bg-success ">Status</a>
                        </td>
                      </tr>
                      ';
                    }
                  }else{
                    echo "<tr>
                            <td colspan='8' class='text-center'>No events posted yet!</td>
                          </tr>";
                  }
                ?>
            </table>
        </div>
    </div>
</div>
<?php include "footer.php"; ?>