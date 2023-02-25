<?php

 $host = "localhost";
 

 if($_SERVER['SERVER_NAME'] === 'localhost'){
   $username = "root";
   $password = "";
   $db_name = "hnb-council";

   echo "We are here";
 }else{
   $username = "u932881995_hnbgucc";
   $password = "Kyojin@12345";
   $db_name = "u932881995_hnbguclubs";
 }
 
 
 $conn = mysqli_connect($host,$username,$password,$db_name);

 if(!$conn){
    echo "Something went wrong"+$conn;
 }


//page redirection 
 function redirect($loc){
?>
<script>
   window.location.href='<?php echo $loc ?>';
</script>
<?php
}
?>