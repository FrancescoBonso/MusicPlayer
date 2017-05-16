<?php include "database_setup.php"; ?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Artista-Canzoni</title>
  </head>
  <body>
    <?php

    $art=$_GET["art"];

    //$con = connect();
    //$db=mysqli_select_db($con, "MusicPlayer");

    //$query="SELECT 'titolo' FROM canzoni 	WHERE 'titolo'='$cerca'";
    $query="SELECT titolo FROM canzoni WHERE artista='$art'";

    $risultato=mysqli_query($conn, $query);

    if ($risultato)
    {
    	
    	while ($linea=mysqli_fetch_assoc($risultato)) {
        //echo "<tr>";
      	//echo "<td>";
        echo $linea["titolo"];
      	echo "<br>";
      	//echo "<br/>";
    	}
    	//echo "</table>";
    }
    else {
    	echo "errore";
    }
    ?>

  </body>
</html>
