<?php
echo "<script>alert('hello');</script>";
 if(isset($_POST['email'])){
     echo "<script>alert('".$_POST['email']."');</script>";
 }
?>