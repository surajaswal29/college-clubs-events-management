<?php

  include "master.php";
  include "header.php";

?>
<div class="container">
    <div class="row">
                <nav aria-label="breadcrumb">
                  <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="home">Home</a></li>
                    <li class="breadcrumb-item"><a href="eventdashboard?club=<?php echo $_GET['club']; ?>">eventdashboard</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Event Log</li>
                  </ol>
                </nav>
        <div class="col-md-12 mt-4">
            <h2>Events Added</h2>
        </div>
        <div class="col-md-12">
            <table class="table table-bordered table-responsive">
                <tr>
                    <th>ID</th>
                    <th>Event Name</th>
                    <th>Venue</th>
                    <th>Start Date</th>
                    <th>End Date</th>
                    <th>Edit/Delete</th>
                </tr>
                <tr>
                    <td>2</td>
                    <td>Hackathon 1.0</td>
                    <td> HEMVATI NANDAN BAHUGUNA GARHWAL UNIVERSITY, Chaursa Campus</td>
                    <td>22-06-2022</td>
                    <td>22-06-2022</td>
                    <td><a href="#" class="text-primary">E</a>  | <a href="#" class="text-danger">D</a></td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>Hackathon 1.0</td>
                    <td> HEMVATI NANDAN BAHUGUNA GARHWAL UNIVERSITY, Chaursa Campus</td>
                    <td>22-06-2022</td>
                    <td>22-06-2022</td>
                    <td><a href="#" class="text-primary">E</a>  | <a href="#" class="text-danger">D</a></td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>Hackathon 1.0</td>
                    <td> HEMVATI NANDAN BAHUGUNA GARHWAL UNIVERSITY, Chaursa Campus</td>
                    <td>22-06-2022</td>
                    <td>22-06-2022</td>
                    <td><a href="#" class="text-primary">E</a>  | <a href="#" class="text-danger">D</a></td>
                </tr>
            </table>
        </div>
    </div>
</div>