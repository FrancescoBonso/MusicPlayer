<?php include "database_setup.php"; ?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Artista-Canzoni</title>
  </head>
  <body>
<?php

$sel=$_GET["albm"];

$query="SELECT album FROM canzoni WHERE 'album'='$sel'";

							$risultato=mysqli_query($conn, $query);
							if (!$risultato) {
								echo "Errore di query";
								}

							$brani=mysqli_num_rows($risultato);

							if($brani>0) {
								echo "<table>";

								while ($linea=mysqli_fetch_array($risultato)) {
                  echo "<tr>";
                	echo "<td>";
                  echo $risultato;
                	echo "</td>";
                	echo "<br/>";
								}
								echo "</table>";
							}
							mysqli_close($conn);

              ?>

  </body>
</html>
