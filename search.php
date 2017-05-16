<?php

include "database_setup.php";

$cerca=$_POST["cerca"];

$query="SELECT titolo FROM canzoni WHERE (titolo LIKE '%" .$cerca. "%')";

$risultato=mysqli_query($conn, $query);

if ($risultato)
{
  echo "Brani Trovati";
  echo "<br>";

	while ($linea=mysqli_fetch_assoc($risultato)) {

    echo $linea["titolo"];
  	echo "<br>";

	}

}
else {
	echo "errore";
}
?>

<?php

include "database_setup.php";

$cerca=$_POST["cerca"];

$query="SELECT album FROM canzoni WHERE (album LIKE '%" .$cerca. "%')";

$risultato=mysqli_query($conn, $query);

if ($risultato)
{
  echo "Album Trovati";
  echo "<br>";

	while ($linea=mysqli_fetch_assoc($risultato)) {

    echo $linea["album"];
  	echo "<br>";

	}

}
else {
	echo "errore";
}
?>

<?php

include "database_setup.php";

$cerca=$_POST["cerca"];

$query="SELECT artista FROM canzoni WHERE (artista LIKE '%" .$cerca. "%')";

$risultato=mysqli_query($conn, $query);

if ($risultato)
{
  echo "Artisti Trovati";
  echo "<br>";

	while ($linea=mysqli_fetch_assoc($risultato)) {

    echo $linea["artista"];
  	echo "<br>";

	}

}
else {
	echo "errore";
}
?>
