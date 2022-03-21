<?php  

include '../conn1.php';
				
$sql = "select imes from stanica group by stanicaid";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
     echo "<centar><table><tr><th>Stanice</th>";
     // output data of each row
     while($row = $result->fetch_assoc()) {
         echo "<tr><td>" . $row["imes"]. "</td></tr>";
	 //echo $row['imes'];
     }
     echo "</table></centar>";
	 
} else {
     echo "0 results";
}


	?>	
	