<?php include "database_setup.php";
?>

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
  echo "<tr>";
	echo "<td>";
  //onclick, funzione java che mi permette di utilizzare una stringa come input di un form sotto creato
  echo "<a onclick='document.getElementById(\"art\").value = this.innerText; document.getElementById(\"form\").submit()'>".$row["artista"]."</a>";
  echo "</td>";
  echo "</tr>";
}
echo "</table>";

?>
    <form method='get' action='artong.php' id="form">
      <input id="art" type="text" name="art">
      <input type="submit">
    </form>
  </body>
</html>
