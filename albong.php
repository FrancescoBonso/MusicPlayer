<?php include "database_setup.php"; ?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Artista-Canzoni</title>
  </head>
  <body>
    <div>


<?php
//prendo il valore in input
$album=$_GET["albm"];
//cerco le canzoni contenute in un album e le stampo
$query="SELECT titolo FROM canzoni WHERE album='$album'";

$risultato=mysqli_query($conn, $query);

if ($risultato)
{
	while ($linea=mysqli_fetch_assoc($risultato)) {

  	echo "<div>";
    echo $linea["titolo"];
  	echo "<br>";
  	echo "</div>";
	}

}
else {
	echo "errore";
}
?>
    </div>
  </body>
</html>
