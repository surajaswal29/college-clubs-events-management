<?php  
    include "master-file.php";
    include "admin-header.php"
?>

<div class="container-fluid">
    <div class="row p-4">
        <div class="col-md-10 pr-center">
                <div class="add-form">
                    <form action="<?php $_SERVER['PHP_SELF']; ?>" method="post">
                        
                        <!-- username -->
                        <div class="row mt-3">
                            <div class="col-md-4 label">
                                <label for="name" class="col-form-label">Name:</label>
                            </div>
                            <div class="col-md-8">
                                <input type="text" name="name" id="name" class="form-control">
                            </div>
                        </div>
                        <!-- academy -->
                        <div class="row mt-3">
                            <div class="col-md-4 label">
                                <label for="academy" class="col-form-label">Event Venue:</label>
                            </div>
                            <div class="col-md-8">
                                <input type="text" name="desg" id="desg" class="form-control">
                            </div>
                        </div>
                        <!-- mobile no. -->
                        <div class="row mt-3">
                            <div class="col-md-4 label">
                                <label for="username">Mobile Number :</label>
                            </div>
                            <div class="col-md-8">
                                <input type="text" name="phone" id="phone" class="form-control">
                            </div>
                        </div>
                        <!-- type -->
                        <div class="row mt-3">
                            <div class="col-md-4 label">
                                <label for="username">Staff Type :</label>
                            </div>
                            <div class="col-md-8">
                                <select name="type" id="type" class="form-control">
                                    <option value="Select Staff type">Select staff Type</option>
                                    <option value="Regular">Regular</option>
                                    <option value="Part Time">Part Time</option>
                                </select>
                            </div>
                        </div>
                        <!-- email -->
                        <div class="row mt-3">
                            <div class="col-md-3 offset-4">
                                <input type="submit" name="sub" value="Add staff" class="btn btn-block btn-danger">
                            </div>
                        </div>
                        <div class="row mt-3">
                            <div class="col-md-12">
                            <?php
                                if(isset($_POST['sub'])){

                                    $date=date('y-m-d');
                                    $id=$_POST['id'];
                                    $name=$_POST["name"];
                                    $desg=$_POST["desg"];
                                    $phone=mysqli_real_escape_string($con,$_POST["phone"]);
                                    $type=$_POST["type"];

                                    $query="SELECT * FROM staff_info WHERE phone='{$phone}'";
                                    $result=mysqli_query($con,$query);
                                    if(mysqli_num_rows($result)>0){
                                        $row=mysqli_fetch_assoc($result);
                                        if($phone==$row['phone']){
                                           echo"<script>alert('Staff Member Already Exist')</script>";
                                        }
                                    }else
                                        {
                                            $query="INSERT INTO staff_info(id,name,designation,phone,type,date) VALUES($id,'{$name}','$desg','$phone','{$type}','$date')";
                                            $output=mysqli_query($con,$query) or die("Query Failed!");
                                            if($output){
                                               echo"<script>alert('Staff Added Successfully')</script>";
                                            }
                                            mysqli_close($con);
                                        }
                                }
                            ?>
                            </div>
                        </div>
                    </form>
                </div>
        </div>
    </div>
</div>