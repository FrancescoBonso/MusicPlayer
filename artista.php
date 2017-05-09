<?php include "database_setup.php"; ?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Artista</title>
  </head>
  <body>
<?php

$query = "SELECT distinct artista FROM canzoni";
$result = mysqli_query($conn, $query);

echo "<table>";
echo "<th>Artisti</th>";

while($row = mysqli_fetch_assoc($result)) {
  //print_r($row);
	echo "<tr>";
	echo "<td>";
  echo "<form id="art">";
  echo "<a href="link" onclick="document.getElementById('art').submit()">".$row["artista"]."</a>";
  echo "</form>";
	echo "</td>";
	echo "<br/>";

}
echo "</table>";

mysql_close();

?>

  </body>
</html>
