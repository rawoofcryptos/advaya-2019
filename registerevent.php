<?php
include "connec.php";
	
if (isset($_POST["SUBMIT"]))
{
    $event=$_POST["event"];
	$fname=$_POST["firstname"];
	$lname=$_POST["lastname"];
	$eml=$_POST["email"];
	$regno=$_POST["regno"];
	$clg=$_POST["college"];
    $pno=$_POST["phonenum"];
    $bran=$_POST["branch"];
	$sem=$_POST["sem"];
    $error="";

    if (empty($event)) 
	{
	    
		$error.="Please select an event<br>";
		
	}
	if (empty($fname)) 
	{
		$error.="Please enter your first name<br>";
	}
	if(empty($lname))
	{
		$error.="Please enter your last name<br>";
	}
	if(empty($clg))
	{
		$error.="Please enter your college<br>";
	}
	if(empty($eml))
	{
		$error.="Please enter your email<br>";
	}
	else if(!filter_var($eml,FILTER_VALIDATE_EMAIL))
	{
			$error.="Enter a valid email <br>";
	}
	if(empty($regno))
	{
		$error.="Please enter your college registration number<br>";
	}
if(empty($pno))
    {
	$error.="Please enter your phone number<br>";
    }
if(empty($bran))
    {
	$error.="Please enter your branch<br>";
    }
if(empty($sem))
    {
	$error.="Please select your semester<br>";
	
    }


if(empty($error))
	{
		$sql1 = "SELECT * FROM eventreg where phonenum=".$regno;
		$result1=mysqli_query($conn,$sql1); 
		if ($result1->num_rows > 0) 
		{
		    // output data of each row
			$row = $result1->fetch_assoc();
			   if($row["event"]==$event&&$row["fname"]==$fname&&$row["lname"]==$lname&&$row["email"]==$eml&&$row["regno"]&&$row["college"]==$clg&&$row["phonenum"]==$pno&&$row["branch"]==$bran&&$row["sem"]==$sem)
			    {
					echo "Entry already exist";
					header("Location: http://advaya8.com/events/regfail.html");
					exit();
				}
		}
		$sql=" INSERT INTO eventreg(event,fname,lname,email,regno,college,phonenum,branch,sem)values('$event','$fname','$lname','$eml','$regno','$clg','$pno','$bran','$sem')";
		$result=mysqli_query($conn,$sql);
		$suc="<br>'$event','$fname','$lname','$eml','$regno','$clg','$pno','$bran','$sem'";
		if($result)
		{
			header("Location: http://advaya8.com/events/regsuc.html");
			echo $suc;
		}

	else
	    {
		//header("Location: http://advaya8.com/events/regfail.html");
		echo $error;
	    }   
    } 
else
    {
        echo "Registration failed<br>";
        echo "<a href='http://advaya8.com/events/events.html'>Continue to Events<br></a>";
		echo $error;

	}
}else{
    echo "no parameters";
}
 echo $error;
	
echo "<br>In case of error or if neither successd nor fail,please send an email with your details to <h3>advayaofficial@gmail.com with subject event</h3></a><br>";
?>