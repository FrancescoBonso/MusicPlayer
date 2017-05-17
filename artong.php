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
    $art=$_GET["art"];
    //cerco le canzoni dell'artista e le stampo
    $query="SELECT titolo FROM canzoni WHERE artista='$art'";

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
