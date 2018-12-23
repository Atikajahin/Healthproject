<?php

$db = mysqli_connect("localhost", "root", "","database");

if(isset($_POST['submit'])) {
    $Fullname = $_POST['Fullname'];
$Email = $_POST['Email'];
$Phone Number = $_POST['Phone Number'];
$Booking date = $_POST['Booking date'];
    	$sql = "INSERT INTO datable(Fullname,Email,Phone Number,
		Booking date) VALUES('$Fullname','$Email','Phone Number',
		'Booking date')";
		mysqli_query($db,$sql);
 
}
?>