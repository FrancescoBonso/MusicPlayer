<?php include "database_setup.php";
//prendo in inout il valore del form e creo 3 query differenti per album artisti e titoli coasì da avere 3 sezioni differenti
$cerca=$_POST["cerca"];
 ?>
 <script type="javascript">
 	function loadLink(t){
 		document.getElementById('YouTubeFrame').setAttribute('src', t.getAttribute('href'));
 	};
 </script>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
<div>


<?php


//query titolo, il like '% %' serve per cercare stringhe con lettere prima o dopo dell'input
$query="SELECT titolo, link_youtube FROM canzoni WHERE (titolo LIKE '%" .$cerca. "%')";

$risultato=mysqli_query($conn, $query);

if ($risultato)
{
  echo "<div>";
	while ($linea=mysqli_fetch_assoc($risultato)) {

    echo "<div>";
    echo "<br>";
    echo "<a href='".$linea["link_youtube"]."' onclick='loadLink(this)' >".$linea["titolo"]."</a>";
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
</div>

<form method='get' action='artong.php' id="form">
  <input id="art" type="text" name="art">
  <input type="submit">
</form>

<form method='get' action='albong.php' id="form">
  <input id="albm" type="text" name="albm">
  <input type="submit">
</form>

<iframe id="YouTubeFrame" src="t.getAttribute('href')"></iframe>

</body>
</html>
