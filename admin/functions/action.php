<html>
<head><title>Enquiries</title></head>
	<style>
		body{
			background-image: url(../images/egypt-pyramids-night-view-hd-wallpaper-1280x800.jpg);
			color: azure;
			text-align: center;
		}
	</style>
	<body>
	<h1>Current Enquiries</h1><hr/>
	</body>
</html>
<?php 
include "connect.php";

$trip = $_POST['trip'];
$i=1;

$sql = "SELECT * FROM `enquiry` WHERE `tripname` = '$trip'";
$res=$conn->query($sql);
if ($res->num_rows > 0) {
    			while($row = $res->fetch_assoc()) {
	    				echo $i."  ".$row['ename']."   ";
						echo $row['email'],"   ";
					    	echo $row['phone'],"   ";
					         	echo $row['message'],"   ";
					           	echo $row['tripname'],"<br/>";
					             $i++;
								}
						}
?>