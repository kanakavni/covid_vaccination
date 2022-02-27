<?php
    include "../connection.php";
    if(isset($_SESSION['uname'])){
        header('Location: admin_home.php');
    }
    if(isset($_POST['but_submit'])){
        $uname = mysqli_real_escape_string($con,$_POST['txt_username']);
        $password = mysqli_real_escape_string($con,$_POST['txt_password']);
        if ($uname != "" && $password != ""){
            
            $sql_query = "select count(*) as cntUser from admin_users where username='".$uname."' and password='".$password."'";
            $result = mysqli_query($con,$sql_query);
            $row = mysqli_fetch_array($result);
            $count = $row['cntUser'];
            if($count > 0){
                $_SESSION['uname'] = $uname;
                header('Location: admin_home.php');
            }else{
                echo "<script>alert('Invalid username and password!');</script>";
            }
        }
    }
?>

<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <?php require '../base.php'; ?>
    <link rel="stylesheet" href="css/admin_main.css">
    <script src="js/admin_login.js"></script>
</head>

<body>
    <div class="container">

        <div class="row" style="margin-top:20px">
            <div class="col-xs-12 col-sm-8 col-md-6 col-sm-offset-2 col-md-offset-3">
                <form action="admin_login.php" method="post" role="form">
                    <fieldset>
                        <h2>Please Sign In</h2>
                        <hr class="colorgraph">
                        <div class="form-group">
                            <input type="text" name="txt_username" id="username" class="form-control input-lg" placeholder="Username">
                        </div>
                        <div class="form-group">
                            <input type="password" name="txt_password" id="password" class="form-control input-lg" placeholder="Password">
                        </div>
                        <span class="button-checkbox">
                            <button type="button" class="btn" data-color="info">Remember Me</button>
                            <input type="checkbox" name="remember_me" id="remember_me" checked="checked" class="hidden">
                            <a href="" class="btn btn-link pull-right">Forgot Password?</a>
                        </span>
                        <hr class="colorgraph">
                        <div class="row">
                            <div class="col-xs-6 col-sm-6 col-md-6">
                                <input type="submit" class="btn btn-lg btn-success btn-block" value="Sign In" name="but_submit">
                            </div>
                            <div class="col-xs-6 col-sm-6 col-md-6">
                                <a href="" class="btn btn-lg btn-primary btn-block">Register</a>
                            </div>
                        </div>
                    </fieldset>
                </form>
            </div>
        </div>

    </div>
</body>

</html>