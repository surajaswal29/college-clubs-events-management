<?php 
    include "master-file.php";
?>

<div class="container-fluid bg-admin-page">
    <div class="row">
        <div class="col-md-12 py-4 mt-5 text-center">
            <h1 class="text-dark">HNBGU COUNCILS & CLUBS | Admin Panel</h1>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12 pr-center mt-3">
            <div class="form-box p-4">
                <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post">
                    <div class="row">
                        <div class="col-md-12 mt-3">
                            <label for="uname">Username</label>
                            <input type="text" name="username" id="uname" class="form-control"/>
                        </div>
                        <div class="col-md-12 mt-3">
                            <label for="pass">Password</label>
                            <input type="password" name="password" id="pass" class="form-control"/>
                            
                            <span class="error-red">
                            <?php
                            $username = "HNBGU-CC";
                            $password = "123";

                            if(isset($_POST['login'])){
                                $uname = $_POST['username'];
                                $pass = $_POST['password'];

                                if($uname === $username && $pass === $password){
                                   $_SESSION['setusername'] = $uname;
                                  
                                    redirect('main.php');
                                }else{
                                    echo "Error: Incorrect Username or Password!";
                                }
                            }
                            ?>
                            </span>
                        </div>
                        <div class="col-md-12 mt-2 mb-3">
                            <button type="submit" class="form-control bg-primary mt-3 text-light" name="login">Log in <i class="fa-solid fa-arrow-right"></i></button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>