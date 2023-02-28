<?php
  include "master.php";
  include "header.php";

  if(isset($_POST['join'])){
      $club_name=$_POST['club'];
      $date=date('Y-m-d');

      $club_register = "SELECT * FROM club_info WHERE club_name ='{$club_name}' ";
      $club_register_query = mysqli_query($conn,$club_register);

      if(mysqli_num_rows($club_register_query)>0){
        $club_table = mysqli_fetch_assoc($club_register_query);

        $list_joined_club = "SELECT * FROM `{$club_table['club_table']}` WHERE joiner_id = '{$_SESSION['register_id']}'";
        $list_joined_club_query = mysqli_query($conn,$list_joined_club);

        if(mysqli_num_rows($list_joined_club_query)>0){
          echo "<script> alert('".$club_name."already joined!'); </script>";
        }else{

            $insert_club_table = "INSERT INTO `{$club_table['club_table']}` 
                                  (`joiner_id`, `joiner_name`, `joiner_course`,`joiner_role`, `joined_on`) 
                                  VALUES 
                                  ('{$_SESSION['register_id']}', '{$_SESSION['user_name']} {$_SESSION['last_name']}', '{$_SESSION['course']}','Member' ,'{$date}')";
            $insert_club_table_query = mysqli_query($conn,$insert_club_table);

            if($insert_club_table_query){
              echo "<script> alert('".$club_name." Joined Successfully!'); </script>";
              // redirect('club-join-registration.php');
            }
        }
      }
  }

  if(isset($_POST['submit'])){
    echo "<script>alert('You've successfully joined clubs!')</script>";
    redirect('registeredclubs');
  }

?>

    <div class="form-wrap">
      <div class="container shadow">
        <div class="row">
          <div class="col-md-12 m-0 p-0 form-heading">
            <h1 class="btn-block">Club Joining Form</h1>
          </div>
        </div>
        <div class="row justify-content-center align-items-center display-none" id="signup">
          <div class="col-md-12">
            <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post" class="form p-md-5">           
                <div class="row">
                  <div class="col-md-12">
                    <p class="text-bold text-danger"><em>Note: A user can join multiple clubs.</em></p>
                  </div>
                  <div class="col-md-6 mt-2">
                    <label for="council">Club (Choose club which you want to join)<span class="imp-op">*</span></label>
                    <select name="club" id="club" class="form-control">
                      <option value="00">Choose Club</option>
                        <?php
                          $club_list_query = "SELECT * FROM `club_info`";
                          $club_list_output = mysqli_query($conn,$club_list_query);

                          if(mysqli_num_rows($club_list_output)>0){
                            while($data = mysqli_fetch_assoc($club_list_output)){
                    
                        ?>
                        
                          
                          <option value="<?php echo $data['club_name']; ?>">
                            <?php echo $data['club_name']; ?>
                          </option>
                        
                        <?php
                            }
                          }
                        ?>
                    </select>
                  </div>
                  <!-- <div class="col-md-6 mt-2">
                      <label>List of clubs you've joined</label>
                      <?php
                          // $list_joined_club = "SELECT * FROM `{$club_table['club_table']}` WHERE joiner_id = '{$_SESSION['reg_id']}'";
                          // $list_joined_club_query = mysqli_query($conn,$list_joined_club);

                          // if(mysqli_num_rows($list_joined_club_query)>0){
                          //   while($club_data = mysqli_fetch_assoc($list_joined_club_query)){
                          //     echo $club_data['']
                          //   }
                          // }
                      ?>
                      <p class="text-danger border p-3 rounded">No clubs joined yet!</p>
                  </div> -->
                </div>
                <div class="row">
                  <div class="col-md-3 mb-3">
                    <button
                      required
                      name="join"
                      type="submit"
                      id="reg-submit"
                      class="form-control mt-2 bg-secondary text-light"
                      >
                      Join Club
                    </button>
                  </div>
                  <div class="col-md-3 mb-3">
                    <button                    
                      name="submit"
                      type="submit"
                      id="reg-submit"
                      class="form-control mt-2 bg-primary text-light"
                      >
                      Submit
                    </button>
                  </div>
                  <div class="col-md-12 text-center">
                    <span><a href="https://hnbguclubs.live/" class="text-secondary">https://hnbguclubs.live/</a></span>
                  </div>
                </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </body>
</html>