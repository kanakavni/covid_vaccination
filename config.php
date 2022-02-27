<?php

$dbhost='localhost';
$dbname='covid_vaccination';
$dbusername='root';
$dbpass='';

$con=mysqli_connect($dbhost,$dbusername,$dbpass,$dbname);
if(!$con){
	echo "Database connection Error";
}

if(isset($_POST['submit']))
{

$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$email = $_POST['email'];
$address = $_POST['address'];
$mobileno = $_POST['mobileno'];
$comment = $_POST['comment'];
$sql="insert into contact(firstname,lastname,email,address,mobileno,comment) VALUES('$firstname','$lastname','$email','$address','$mobileno','$comment')";

$result=mysqli_query($con,$sql);

if ($result)
 {
	echo "<script>alert('Data Successfully Submitted');</script>";
	sleep(3);
	echo "<script>location.replace('contact.php')</script>";
}
else{
	echo "<script>alert('Failure');</script>";
}

}

?>