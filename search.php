<?php

include "database_setup.php";

$cerca=$_POST["cerca"];

//$con = connect();
//$db=mysqli_select_db($con, "MusicPlayer");

$query="SELECT 'titolo' FROM canzoni 	WHERE 'titolo'='$cerca'";
$risultato=mysqli_query($conn, $query);

if ($risultato)
{
	echo "sono in if";
	//echo"$risultato";
	//echo "<table>";
	while ($linea=mysqli_fetch_assoc($risultato)) {
    //echo "<tr>";
  	//echo "<td>";
    echo $linea["titolo"];
  	echo "<br>";
  	//echo "<br/>";
	}
	//echo "</table>";
}
else {
	echo "errore";
}
?>
