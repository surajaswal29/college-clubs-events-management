<?php

  include "master.php";
  include "header.php";

?>
<div class="container">
    <div class="row">
       <div class="col-md-12 mt-3">
       <nav aria-label="breadcrumb">
                  <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="home">Home</a></li>
                    <li class="breadcrumb-item"><a href="eventdashboard">eventdashboard</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Add Event</li>
                  </ol>
                </nav>
        <div class="row mt-5 justify-content-center">
            <div class="col-md-3 pr-center"><a href="event-log.php?club=<?php echo $_GET['club'] ?>" class="bg-primary mt-3 px-5 py-3 text-decoration-none text-light">Event Logs</a></div>
            <div class="col-md-3 pr-center"><a href="event-management.php?club=<?php echo $_GET['club'] ?>" class="mt-3 bg-primary px-5 py-3 text-decoration-none text-light ">Add Event</a></div>
        </div>
            
            
       </div>
    </div>
</div>