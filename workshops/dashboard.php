
<?php
$conn=mysqli_connect("localhost","advaya8","advaya8","advaya");
if(!$conn)
{
	echo "not connected";
}

$sql="SELECT * FROM `regtest` ORDER BY workshop";
$result = mysqli_query($conn,$sql);
echo "<table border='1'><tr><th>workshop</th><th>fname</th><th>lname</th><th>email</th><th>college</th><th>phonenum</th><th>branch</th><th>sem</th></tr>";
if ($result->num_rows > 0) 
		{
		    // output data of each row
		    $row = mysqli_fetch_array($result);
			while($row)
			{
			    echo "<tr>";    
                echo "<td>" . $row['workshop'] . "</td>";    
                echo "<td>" . $row['fname'] . "</td>";
                echo "<td>" . $row['lname'] . "</td>";
                echo "<td>" . $row['email'] . "</td>";
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