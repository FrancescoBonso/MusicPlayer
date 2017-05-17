<?php include "database_setup.php"; ?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Album</title>
</head>

<body>

<?php

$query = "SELECT distinct album FROM canzoni";
$result = mysqli_query($conn, $query);

echo "<table>";
echo "<th>Album</th>";

while($row = mysqli_fetch_assoc($result)) {
  echo "<tr>";
	echo "<td>";
  //onclick, funzione java che mi permette di utilizzare una stringa come input di un form sotto creato
  echo "<a onclick='document.getElementById(\"albm\").value = this.innerText; document.getElementById(\"form\").submit()'>".$row["album"]."</a>";
  echo "</td>";
  echo "</tr>";
}

echo "</table>";


?>

<form method='get' action='albong.php' id="form">
  <input id="albm" type="text" name="albm">
  <input type="submit">
</form>

</body>
</html>
