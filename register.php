<?php
include "connec.php";
	
if (isset($_POST["SUBMIT"]))
{
    $workshop=$_POST["workshop"];
	$fname=$_POST["firstname"];
	$lname=$_POST["lastname"];
	$eml=$_POST["email"];
	$clg=$_POST["college"];
    $pno=$_POST["phonenum"];
    $bran=$_POST["branch"];
	$sem=$_POST["sem"];
    $error="";

    if (empty($workshop)) 
	{
	    
		$error.="Please select a workshop<br>";
		
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
		$myText = (string)$pno;
		$sql1 = "SELECT * FROM regtest where phonenum=".$myText;
		$result1=mysqli_query($conn,$sql1); 
		if ($result1->num_rows > 0) 
		{
		    // output data of each row
			$row = $result1->fetch_assoc();
			   if($row["workshop"]==$workshop&&$row["fname"]==$fname&&$row["lname"]==$lname&&$row["email"]==$eml&&$row["college"]==$clg&&$row["phonenum"]==$pno&&$row["branch"]==$bran&&$row["sem"]==$sem)
			    {
					echo "Entry already exist";
					exit();
				}
		}
		$sql=" INSERT INTO regtest(workshop,fname,lname,email,college,phonenum,branch,sem)values('$workshop','$fname','$lname','$eml','$clg','$pno','$bran','$sem')";
		$result=mysqli_query($conn,$sql);
		$suc="<br>'$workshop','$fname','$lname','$eml','$clg','$pno','$bran','$sem'";
		if($result)
		{
			header("Location: http://advaya8.com/workshops/regsuc.html");
			echo $suc;
		}

	else
	    {
		header("Location: http://advaya8.com/workshops/regfail.html");
	    }   
    } 
else
    {
        echo "Registration failed<br>";
        echo "<a href='http://advaya8.com/workshops/workshop.html'>Continue to workshop<br></a>";
		echo $error;

	}
}else{
    echo "no parameters";
}

	
echo "<br>In case of error or if neither successd nor fail,please send an email with your details to <h3>advayaofficial@gmail.com with subject workshop</h3></a><br>";
?>