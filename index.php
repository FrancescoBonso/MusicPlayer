<?php include "database_setup.php"; ?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Artista-Canzoni</title>
  </head>
  <body>
<?php

$sel=$_GET["art"];

$query = "SELECT titolo FROM canzoni WHERE $sel='artista'";
$result = mysqli_query($conn, $query);

echo "<table>";
echo "<th>Artisti</th>";

while($row = mysqli_fetch_assoc($result)) {
  //print_r($row);
	echo "<tr>";
	echo "<td>";
  echo $result;
	echo "</td>";
	echo "<br/>";

}
echo "</table>";

?>

  </body>
</html>
