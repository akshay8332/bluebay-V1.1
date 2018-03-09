<html>
<head><title>Bluebay Admin</title></head>
	<style>
		body{
			background-image: url(../images/egypt-pyramids-night-view-hd-wallpaper-1280x800.jpg);
			text-align: center;
			text-emphasis-style: circle;
			color: aliceblue;
			
		}
	</style>
	<body>
		<h1><ul>Blue Bay World Tours</ul></h1>
		<h2>Current Packages</h2>
	<?php package(); ?>
    <h2>Enquiries</h2>
		
		    <form action="action.php" method="post">
			<input type="hidden" name="actions" value="true"/>
	        <select name="trip">
			<option value="paris">PARIS</option>
			<option value="europe">EUROPE</option>
			<option value="malysia">MALYSIA</option>
     		<option value="usa">USA</option>
			</select>
			<input type="submit" />
			</form>

</body>
</html>	
<?php
		function package(){
    include "connect.php";

	   	$sql = "SELECT * FROM category";
		$result = $conn->query($sql);
		
				if ($result->num_rows > 0) {
    			while($row = $result->fetch_assoc()) {
	    				echo $row['cid'].".   ";
						echo $row['cname'],"   ";
								}
						}
			else {echo "0 results";}
}
?>	  