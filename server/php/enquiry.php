<?php
include "connect.php";
$name=$_POST['name'];
$email=$_POST['email'];
$phone=$_POST['phone'];
$trip=$_POST['trip'];
$message=$_POST['message'];

$sql = "INSERT INTO `enquiry`(`ename`, `email`, `phone`, `message`, `tripname`) VALUES ('$name','$email','$phone','$message','$trip')";
$conn->query($sql);
header("Location: http://localhost/bluebay-V1-masters/bluebay-V1-master/");
?>