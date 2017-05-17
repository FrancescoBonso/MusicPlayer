<?php include "database_setup.php"; ?>
<script type="javascript">
	function loadLink(t){
		document.getElementById('YouTubeFrame').setAttribute('src', t.getAttribute('href'));
	};
</script>

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
    $query="SELECT titolo, link_youtube, album FROM canzoni WHERE artista='$art'";

    $risultato=mysqli_query($conn, $query);

    if ($risultato)
    {

    	while ($linea=mysqli_fetch_assoc($risultato)) {

      	echo "<div>";
        echo "<a href='".$linea["link_youtube"]."' onclick='loadLink(this)' >".$linea["titolo"]."</a>";
        echo "<br/>";
        echo $linea["album"];
      	echo "</div>";
    	}
    }
    else {
    	echo "errore";
    }
    ?>

  </div>

  <iframe id="YouTubeFrame" src="t.getAttribute('href')"></iframe>

  </body>
</html>
