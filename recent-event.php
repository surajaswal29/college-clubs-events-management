<?php

    if($_SERVER['SCRIPT_NAME'] == "/test/college-clubs-events-management/event-list.php"){
        $recent_event_sql = "SELECT * FROM `event-list` WHERE end_date<CURRENT_DATE()";
    }else{
        $recent_event_sql = "SELECT * FROM `event-list` WHERE end_date<CURRENT_DATE() AND organizer = '{$club_name}'";
    }
    $recent_event_sql_query = mysqli_query($conn,$recent_event_sql);

    if(mysqli_num_rows($recent_event_sql_query)>0){
        while($data=mysqli_fetch_assoc($recent_event_sql_query)){
            echo '<div class="recent-event-box border">
                    <div class="row">
                    <div class="col-md-12">
                        <div class="event-img">
                        <img
                            src="upload-image/'.$data["event_image"].'"
                            alt="event images"
                        />
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="event-meta">
                        <span
                            ><i class="fas fa-calendar-alt"></i>
                            '.$data["date"].'</span
                        >
                        <span
                            ><i class="fas fa-users"></i>  '.$data["organizer"].'</span
                        >
                        </div>
                        <div class="event-description">
                        <span><strong>Name:</strong>  '.$data["event_name"].'</span>
                        <span>
                            <strong>Venue</strong>:  '.$data["event_venue"].'
                        </span>
                        <span>
                            <strong>Start Date:</strong>  '.$data["start_date"].' |
                            <strong>End Date:</strong>  '.$data["end_date"].'
                        </span>
                        </div>
                        <div class="event-join">
                        <a href="event_view" class="badge p-2 px-3 mb-2">View</a>
                        </div>
                    </div>
                    </div>
                </div>';
        }
    }else{
        echo'<div class="recent-event-box p-2">
                No Recent Events
            </div>';
    }
                    

?>