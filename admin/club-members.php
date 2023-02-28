<?php  
    include "master-file.php";
    include "admin-header.php";

    $_SESSION['club_id'] = $_GET['cid'];
?>
<div class="container">
    <div class="row">
        <div class="col-md-12 mt-4">
            <h1>Club Members</h1>
        </div>
        <div class="col-md-12 mt-3">
            <table class="table table-bordered">
                <tr class="bg-secondary text-light text-center">
                    <th>Joiner ID</th>
                    <th>Joiner Name</th>
                    <th>Course</th>
                    <th>Role</th>
                    <th>Joined On</th>
                    <th>Actions</th>
                </tr>
                <?php
                       $joiner_query = "SELECT * FROM `{$_GET['cid']}`";
                        $joiner_query_res = mysqli_query($conn,$joiner_query);

                        if(mysqli_num_rows($joiner_query_res)>0){
                            while($joiner_data = mysqli_fetch_assoc($joiner_query_res)){
                                echo "
                                <tr class='text-center'>
                                    <td>".$joiner_data['joiner_id']."</td>
                                    <td>".$joiner_data['joiner_name']."</td>
                                    <td>".$joiner_data['joiner_course']."</td>
                                    <td>".$joiner_data['joiner_role']."</td>
                                    <td>".$joiner_data['joined_on']."</td>
                                    <td class='pr-center'>
                                        
                                        <a href='drop-member.php?id=".$joiner_data['joiner_id']."' class='text-decoration-none btn btn-sm text-light bg-danger mx-3'>Drop</a>
                                        <a href='edit-member.php?id=".$joiner_data['joiner_id']."' class='text-decoration-none btn btn-sm text-light bg-primary'>Promote as Director</a>
                                    </td>
                                </tr>
                                ";
                            }
                        }else{
                            echo "<tr class='text-center'>
                                    <td colspan='6'><div>No Members Yet!</div></td>
                                 </tr>";
                        }

                ?>
            </table>
        </div>
    </div>
</div>