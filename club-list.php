<?php 
  include "master.php";
  include "header.php";
  // echo bin2hex(random_bytes(16));
?>
<section id="description" class="container-fluid">
      <div class="row">
        <div class="col-md-9 hnbgu-council-tab px-md-4">
          <div class="row">
            <div class="col-md-10">
                
                <nav aria-label="breadcrumb">
                  <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="home">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Clubs</li>
                  </ol>
                </nav>
                <h1 class="mt-5">Registered Clubs and Societies</h1>
                <ul class="mt-4">
                  <?php

                    $sql = "SELECT * FROM club_info";
                    $result = mysqli_query($conn,$sql);

                    if(mysqli_num_rows($result)>0){
                      while($data = mysqli_fetch_assoc($result)){
                  ?>
                  <li>
                    <!-- Council Name -->
                    <div class="row">
                      <div class="col-12" id="down-tab">
                          <h3><a href="clubs?cc_name=<?php echo $data['club_name'].'&club_id='.$data['id']; ?>" class="club-link"><?php echo $data['club_name'] ?></a></h3>
                          <p><?php echo substr($data['club_description'], 0,150) ?></p>
                        
                        <!-- <i class="fas fa-angle-down"></i> -->
                      </div>
                    </div>
                    <!-- Clubs Names -->
                    <!-- <div class="row">
                        <div class="col-12">
                          <div id="hnbgu-clubs" class="hnbgu-clubs hnbgu-clubs-hide">
                            <ul>
                              <li><a href="clubs?cc_name=Computer Science Club" class="club-link text-dark"> Computer Science Club          </a> </li>
                              <li><a href="clubs?cc_name=Electrical Club" class="club-link text-dark"> Electrical Club                </a>  </li>
                              <li><a href="clubs?cc_name=Mechanical Club" class="club-link text-dark"> Mechanical Club                </a>   </li>
                              <li><a href="clubs?cc_name=Robotics and Instrumental Club" class="club-link text-dark"> Robotics and Instrumental Club </a>   </li>
                              <li><a href="clubs?cc_name=Designing Club" class="club-link text-dark"> Designing Club                 </a>  </li>
                            </ul>
                          </div>
                        </div>
                      </div> -->
                  </li>
                  <?php
                      }
                    }
                  ?>
                </ul>
            </div>
          </div>
        </div>
        <?php include "sidebar.php"; ?>
    </div>
</section>
<?php include "footer.php"; ?>