<?php
include('login.php'); // Includes Login Script

if(isset($_SESSION['login_user'])){
header("location: source/index.php");
}
?>
<!DOCTYPE html>
<html>
<head>
<title>Login Form in PHP with Session</title>
<link href="style.css" rel="stylesheet" type="text/css">
</head>
<body>
<div id="main">
<h1>Blue Bay World tours ADMIN</h1>
<div id="login">
<h2> ADMIN LOGIN</h2>
<form action="" method="post">
<label><b>UserName </b></label>
<input id="name" name="username" placeholder="username" type="text">
<label><b>Password </b></label>
<input id="password" name="password" placeholder="**********" type="password"><br/><hr/>
<input name="submit" type="submit" value=" Login "><br/>
<span><?php echo $error; ?></span>
</form>
</div>
</div>
	
</body>
	<footer id="footer"> Copyright @ BluebayworldTours</footer>
</html>