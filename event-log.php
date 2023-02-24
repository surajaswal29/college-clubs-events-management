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
        
    </div>
</div>