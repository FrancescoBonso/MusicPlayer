<?php include "database_setup.php"; ?>

<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
	<title>Music</title>
</head>
<body>

<?php

$query = "SELECT * FROM canzoni where 1";

if(isset($_GET["album"]))
{
	$query .= " and `album` = Babel'".$_GET["album"]."'";
}

if(isset($_GET["artista"]))
{
	$query .= " and `artista` = '".$_GET["artista"]."'";
}

echo $query;

$result = mysqli_query($conn, $query);

?>

<style>
table,tr,td,th
{
	border: 1px solid gray;
	padding:2px;
}

</style>

<table>
<tr>
	<th>Titolo</th>
	<th>Album</th>
	<th>Artista</th>
</tr>

<?php
while($row = mysqli_fetch_assoc($result)) {
	//print_r($row);
	echo "<tr>";
	echo "    <td>".$row["titolo"]."</td>";
	echo "    <td>".$row["album"]."</td>";
	echo "    <td>".$row["artista"]."</td>";
	echo "</tr>";
}

?>

</table>

</body>
</html>