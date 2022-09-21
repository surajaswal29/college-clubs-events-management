<?php 
    include "master.php";
    include "header.php";

    if(!isset($_GET['regid'])){
        redirect('home');
    }else{
?>

<div class="container vh-100">
    <div class="row border mt-3">
        <div class="col-md-12 p-2 d-flex">
            <div class="image-preview">
                <img src="###" alt="Preview Image" id="preview-img" class="img-fluid">
            </div>
            <div class="image-btn p-3">
                <form action="#" method="post" enctype="multipart/form-data">
                    <label for="id-image">Upload ID Card</label>
                    <input type="file" name="image" id="id-image" hidden><br>
                    <div class="mt-2" id="image-details">File details will be shown here.</div>

                    <input type="submit" name="file_save" Value="Save" class="btn btn-secondary mt-3">
                </form>
                <?php
                    if(isset($_POST['file_save'])){
                        $file_name = $_FILES['image']['name'];
                        $file_size = $_FILES['image']['size'];
                        $temp_name = $_FILES['image']['tmp_name'];
                        
                        $destination = "upload-image/".$file_name;

                        if(move_uploaded_file($temp_name,$destination)){
                            $idcard_sql = "UPDATE `users` SET `id_card` = '{$file_name}' WHERE `users`.`reg_id` = '{$_GET['regid']}' ";
                            $idcard_output = mysqli_query($conn,$idcard_sql);
                            if($idcard_output){
                                echo'<script> alert("Your Application has been submitted!")  </script>';
                                redirect('home');                            
                            }
                        }
                    }
                ?>
            </div>
        </div>
    </div>
</div>
<?php
    }
?>
</body>
</html>