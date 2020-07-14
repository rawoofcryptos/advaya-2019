<?php
	include "connec.php";
	$sql="UPDATE counter SET count = count + 1";
		$result=mysqli_query($conn,$sql);
		$sql1 = "SELECT count FROM counter";
		$result1=mysqli_query($conn,$sql1);
		if ($result1->num_rows > 0) {
				// output data of each row
				$row = $result1->fetch_assoc();
			   if($row["count"]>=7)
			  {

					header("Location: http://advaya8.com/index.html");
 
						exit;
				}else{
					header("Location: http://advaya8.com/launch.html");
				}
			}
?>