<?php
	include "connec.php";
	session_start();
    if (isset($_POST["SUBMIT"]))
{
    $eventtype=$_POST["eventtype"];
}
$_SESSION['eventtype']=$eventtype;
header("Location: http://advaya8.com/events/register.html");
?>