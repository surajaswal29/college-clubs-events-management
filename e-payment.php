<?php
    include "master.php";
    include "header.php";

    $event_id = $_SESSION['ev_id'];
    $event_tb= $_SESSION['ev_table'];

    $ev_URL = 'event_view?event_id='.$event_id.'&cc_name='.$_SESSION['club_name'];

    if(isset($_POST['isPaid'])){
        $order_id = $_POST['payment_id'];
        
        $date = date('Y-m-d');


        $check_already_joined = "SELECT * FROM `$event_tb` WHERE joiner_id = '{$_SESSION["register_id"]}'";
        $check_already_joined_query = mysqli_query($conn,$check_already_joined);

        if(mysqli_num_rows($check_already_joined_query)>0){
            echo"<script> alert('Event is already joined!'); </script>";
            redirect($ev_URL);
            
        }else{

            $joinEventSQL = "INSERT INTO `$event_tb` (`joiner_id`, `joiner_name`, `joiner_email`,`order_id`,`verified`, `joinDate`) 
                            VALUES ('{$_SESSION['register_id'] }','{$_SESSION['user_name'] } {$_SESSION['last_name'] }','{$_SESSION['email'] }','{$order_id}','0','{$date}')";
            $joinEventSQLQuery = mysqli_query($conn,$joinEventSQL);

            if($joinEventSQLQuery){
                echo"<script> alert('Event joining request is submitted!'); </script>";
                redirect('home');
            }
        }
    }
?>
<div class="container">
    <div class="row mt-5">
        <div class="col-md-4 pr-center">
            <div class="QR-box">
                <img src="payment-QR/<?php echo $_SESSION['QR-code'] ?>" alt="Payment QR">
            </div>
        </div>
        <div class="col-md-4">
            
            <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post">
                <label for="ammount">Amount</label>
                <input class="form-control border" type="number" name="payment_id" value="<?php echo $_SESSION['event_fee']; ?>" disabled="true">
                <label for="payment_id">Payment ID/ Order ID</label>
                <input class="form-control" type="number" name="payment_id" id="payment_id">
                
                <input type="submit" value="Submit" name="isPaid" class="btn btn-success mt-2">
            </form>
            <h6 class="mt-2">For Example:</h6>
            <div class="example-qr border">                
                <img src="payment-QR/order_id.webp" alt="EG" class="img-fluid">
            </div>
        </div>
    </div>
</div>
<?php include "footer.php" ?>