<?php 
session_start();
include("confs/config.php");
if(!$_SESSION['auth'])
{
	header("location:landingpage.php");
}

if(isset($_GET['month']))
{
	$_SESSION['month']=$_GET['month'];
	$year=$_SESSION['year'];
	$_SESSION['sid']=$_GET['sid'];
	$_SESSION['subid']=$_GET['subid'];

}
header("location:salarylist.php");
 ?>
