<?php

  include "master.php";
  include "header.php";

  $view_ev = "SELECT * FROM `{$_GET['ev_table']}`";
  $view_ev_query = mysqli_query($conn,$view_ev);

?>
<div class="container-fluid">
    <div class="row">
       <div class="col-md-12 mt-3">
          <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="home">Home</a></li>
              <li class="breadcrumb-item">
                <a href="clubs?cc_name=<?php echo  $_SESSION['club'].'&club_id='.$_SESSION['club_id'];  ?>"><?php echo $_SESSION['club']; ?></a>
              </li>
              <li class="breadcrumb-item">status</li>
            </ol>
          </nav>
          <div class="row">
            <div class="col-md-12">
              <h1 class="text-center font-00001"><?php echo $_GET['ev_name']."- Joiners Details" ?></h1>
            </div>
          </div>
       </div>
    </div>
    <div class="row mt-md-4">
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
                    <th>Joiner ID</th>
                    <th>Joiner Name</th>
                    <th>Joiner Email</th>
                    <!-- <th>Type</th> -->
                    <th>Join Date</th>
                    <?php
                        if($_GET['ev_type'] == "paid"){
                            echo '<th>Order ID</th>';
                        }
                    ?>
                    
                    <!-- <th>End Date</th> -->
                    <th>Action</th>
                    <th>Status</th>
                </tr>
                <?php
                  if(mysqli_num_rows($view_ev_query)){
                    while($joiner_data = mysqli_fetch_assoc($view_ev_query)){
                      echo'
                      <tr>
                        <td>'.$joiner_data['joiner_id'].'</td>
                        <td>'.$joiner_data['joiner_name'].'</td>
                        <td>'.$joiner_data['joiner_email'].'</td>
                        <td>'.$joiner_data['joinDate'].'</td>
                        
                        '.($_GET['ev_type'] == "paid"?'<td>'.$joiner_data['order_id'].'</td>':"").'
                        <td class="pr-center">
                          <a href="remove-joiner.php?j_id='.$joiner_data['id'].'&ev_table='.$_GET['ev_table'].'&ev_type='.$_GET['ev_type'].'&ev_name='.$_GET['ev_name'].'&ev_id='.$_GET['ev_id'].'" class="badge bg-danger text-light text-decoration-none mx-2">Remove</a>
                          '.($joiner_data['verified'] == "0"?'<a href="verify-joiner.php?j_id='.$joiner_data['id'].'&ev_table='.$_GET['ev_table'].'&ev_type='.$_GET['ev_type'].'&ev_name='.$_GET['ev_name'].'&ev_id='.$_GET['ev_id'].'" class="badge bg-success text-light text-decoration-none mx-2">Verify</a>':"").'
                        </td>
                        <td>  
                          '.($joiner_data['verified'] == "1"?'<a href="#" class="badge bg-success text-light text-decoration-none mx-2 ">verified</a>':'<a href="#" class="badge bg-danger text-light text-decoration-none mx-2 ">Not verified</a>').'
                        </td>
                      </tr>
                      ';
                    }
                  }else{
                    echo "<tr>
                            <td colspan='8' class='text-center'>No Joiners yet!</td>
                          </tr>";
                  }
                ?>
            </table>
        </div>
    </div>
</div>
<?php include "footer.php"; ?>