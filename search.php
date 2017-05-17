<?php include "database_setup.php";
//prendo in inout il valore del form e creo 3 query differenti per album artisti e titoli coasì da avere 3 sezioni differenti
$cerca=$_POST["cerca"];
 ?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>

  </body>
</html>

<?php


//query titolo, il like '% %' serve per cercare stringhe con lettere prima o dopo dell'input
$query="SELECT titolo FROM canzoni WHERE (titolo LIKE '%" .$cerca. "%')";

$risultato=mysqli_query($conn, $query);

if ($risultato)
{
  echo "<div>";
	while ($linea=mysqli_fetch_assoc($risultato)) {

    echo "<div>";
    echo "<br>";
    echo $linea["titolo"];
  	echo "<br>";

	}
  echo "</div>";

}
else {
	echo "errore";
}
?>

<?php

//query per gli album
$query="SELECT album FROM canzoni WHERE (titolo LIKE '%" .$cerca. "%')";

$risultato=mysqli_query($conn, $query);

if ($risultato)
{
  echo "<div>";
	while ($linea=mysqli_fetch_assoc($risultato)) {

    echo "<div>";
    echo "Album";
    echo "<br>";
    echo "<a onclick='document.getElementById(\"albm\").value = this.innerText; document.getElementById(\"form\").submit()'>".$linea["album"]."</a>";
  	echo "<br>";

	}
  echo "</div>";
}
else {
	echo "errore";
}
?>

<?php

//query per gli artisti
$query="SELECT artista FROM canzoni WHERE (titolo LIKE '%" .$cerca. "%')";

$risultato=mysqli_query($conn, $query);

if ($risultato)
{
  echo "<div>";
  while ($linea=mysqli_fetch_assoc($risultato)) {

    echo "<div>";
    echo "Artista";
    echo "<br>";
    echo "<a onclick='document.getElementById(\"art\").value = this.innerText; document.getElementById(\"form\").submit()'>".$linea["artista"]."</a>";
    echo "<br>";

  }
  echo "</div>";

}
else {
	echo "errore";
}
?>

<?php

//query per gli album
$query="SELECT album FROM canzoni WHERE (album LIKE '%" .$cerca. "%')";

$risultato=mysqli_query($conn, $query);

if ($risultato)
{
  echo "<div>";
	while ($linea=mysqli_fetch_assoc($risultato)) {

    echo "<div>";
    echo "<br>";
    echo "<a onclick='document.getElementById(\"albm\").value = this.innerText; document.getElementById(\"form\").submit()'>".$linea["album"]."</a>";
  	echo "<br>";

	}
  echo "</div>";
}
else {
	echo "errore";
}
?>

<?php

//query per gli album
$query="SELECT artista FROM canzoni WHERE (artista LIKE '%" .$cerca. "%')";

$risultato=mysqli_query($conn, $query);

if ($risultato)
{
  echo "<div>";
	while ($linea=mysqli_fetch_assoc($risultato)) {

    echo "<div>";
    echo "<br>";
    echo "<a onclick='document.getElementById(\"art\").value = this.innerText; document.getElementById(\"form\").submit()'>".$linea["artista"]."</a>";
  	echo "<br>";

	}
  echo "</div>";
}
else {
	echo "errore";
}
?>

<form method='get' action='artong.php' id="form">
  <input id="art" type="text" name="art">
  <input type="submit">
</form>

<form method='get' action='albong.php' id="form">
  <input id="albm" type="text" name="albm">
  <input type="submit">
</form>

</body>
</html>
