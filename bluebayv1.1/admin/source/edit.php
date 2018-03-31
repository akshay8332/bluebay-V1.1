<?php
$admin_input=$_POST['inputs'];
if($admin_input == 1)
{
   header("location:add.php");
}
if($admin_input == 2)
{
	include("header.php");
	  include('add_on_site.php');
	include("footer.php");
}
if($admin_input == 3)
{
	include("header.php");
	   include('view_pkg.php');
	include("footer.php");
}
if($admin_input == 4)
{
	include("header.php");
	    include('enqiry.php');
	include("footer.php");
}
if($admin_input == 5)
{
	include("header.php");
	  include('reports.php');
	include("footer.php");
}
if($admin_input == 6)
{
	include("header.php");
	   include('message.php');
	include("footer.php");
}
?>
