<?php  
    include "master-file.php";
    include "admin-header.php"
?>

<div class="container">
    <div class="row mt-4">
        <div class="col-md-12">
            <h1>Event List</h1>
            <table class="table table-bordered text-center">
                <tr class="bg-dark text-light">
                    <th>ID</th>
                    <th>Event Name</th>
                    <th>Venue</th>
                    <th>Organizer</th>
                    <th>Start Date</th>
                    <th>End Date</th>
                    <th>Action</th>
                </tr>
                <?php
                    $e_query = "SELECT * FROM `event-list`";
                    $e_output = mysqli_query($conn,$e_query);

                    if(mysqli_num_rows($e_output)>0){
                        while($e_data = mysqli_fetch_assoc($e_output)){
                ?>
                
                <tr>
                    <td><?php echo $e_data['id']; ?></td>
                    <td><?php echo $e_data['event_name']; ?></td>
                    <td><?php echo $e_data['event_venue']; ?></td>
                    <td><?php echo $e_data['organizer']; ?></td>
                    <td><?php echo $e_data['start_date']; ?></td>
                    <td><?php echo $e_data['end_date']; ?></td>
                    <td class="pr-center">
                        <a href="view-event.php?e_id=<?php echo $e_data['id']; ?>">Edit</a>
                        <a href="view-event.php?e_id=<?php echo $e_data['id']; ?>">Delete</a>
                    </td>
                </tr>
                
                <?php
                        }
                    }
                ?>
                
            </table>
        </div>
        <div class="col-md-12 pr-center">
            <div class="nav">
                <a href="#" class="nav-link btn bg-dark text-light mx-2"><i class="fa-solid fa-angles-left"></i> Prev</a>
                <a href="#" class="nav-link btn bg-dark text-light mx-2">1</a>
                <a href="#" class="nav-link btn bg-dark text-light mx-2">2</a>
                <a href="#" class="nav-link">...</a>
                <a href="#" class="nav-link btn bg-dark text-light mx-2">Next <i class="fa-solid fa-angles-right"></i></a>
            </div>
        </div>
    </div>
</div>