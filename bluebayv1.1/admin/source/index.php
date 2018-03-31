<html>
	<link rel="stylesheet" src="style.css">
<?php
	include("session.php");
	include("header.php");
	
?><div id="div0">
	<marquee  scrollamount="10" direction="left" width="100%">logout after session</marquee>
  </div>
	<div id="div1">
<form action="edit.php" method="post">
<button id="login" name="inputs" value="1">ADD PACKAGE</button>

<button id="login" name="inputs" value="2">ADD PACKAGES ON SITE</button><br/>
	
<button id="login" name="inputs" value="3">VIEW PACKAGES</button>
	
<button id="login" name="inputs" value="4">ENQIRY</button><br/>
	
<button id="login" name="inputs" value="5">REPORTS</button>
	
	<button id="login" name="inputs" value="6">SEND MESSAGE</button>
</form>
</div>
<?php
include("footer.php");
?>
</html>
