
<?php
$conn=mysqli_connect("localhost","advaya8","advaya8","advaya");
if(!$conn)
{
	echo "not connected";
}
if (isset($_POST["submit"]))
{
    $cata=$_POST["cata"];
}
$sql="SELECT DISTINCT * FROM `eventreg` where event='".$cata;
$sql.="' order by event";
$result = mysqli_query($conn,$sql);
echo "<table border='1'><tr><th>event</th><th>fname</th><th>lname</th><th>email</th><th>register no</th><th>college</th><th>phonenum</th><th>branch</th><th>sem</th></tr>";
if ($result->num_rows > 0) 
		{
		    // output data of each row
		    $row = mysqli_fetch_array($result);
			while($row)
			{
			    echo "<tr>";    
                echo "<td>" . $row['event'] . "</td>";    
                echo "<td>" . $row['fname'] . "</td>";
                echo "<td>" . $row['lname'] . "</td>";
                echo "<td>" . $row['email'] . "</td>";
                echo "<td>" . $row['regno'] . "</td>";
                echo "<td>" . $row['college'] . "</td>";
                echo "<td>" . $row['phonenum'] . "</td>";
                echo "<td>" . $row['branch'] . "</td>";
                echo "<td>" . $row['sem'] . "</td>";
                echo "</tr>";
                $row = $result->fetch_assoc();
			}
			   
		}


while($row = mysqli_fetch_array($result))
{

}
echo "</table>";

?>