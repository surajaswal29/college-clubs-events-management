<?php

 $host = "localhost";
 $username = "root";
 $password = "";
 $db_name = "hnb-council";
 
 $conn = mysqli_connect($host,$username,$password,$db_name);

 if(!$conn){
    echo "Something went wrong"+$conn;
 }


 function redirect($loc){
?>
<script>
   window.location.href='<?php echo $loc ?>';
</script>
<?php
}
?>