<?php
include "../connection.php";

if (isset($_GET['op'])) {
    echo "<script>alert('logout!');</script>";
    session_destroy();
    header('Location: admin_login.php');
} else {
   if(isset($_SESSION('uname'))){
       
   }
}
?>