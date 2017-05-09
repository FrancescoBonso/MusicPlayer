<?php include "database_setup.php";
?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="spotistyle.css">
    <title>Spotify</title>
  </head>

  <body>

<div class="container">


    <header>
    	<div>
      <a href="Spotify.html"><h1>Our Music Player</h1></a> <!--la pagina html?-->
      </div>

      <div>
        <a href='04_checksession.php'><img border='0' alt='Upload' src='icon_edit.png' width='50' height='50' align='right'></a>;
      </div>

    </header>

    <aside>
      <br/><br/>
      <form id="form" action="search.php" method="post">
      	<input id="barra" type="text" name="cerca" placeholder="Search"><input id="bott" type="image">
      </form>

      <div id="mymusic">
      <h3>La Mia Musica</h3>
        <br/>
        <a id="menu" href="brani.php" target="pp">Brani</a><hr><br><br>
        <a id="menu" href="album.php" target="pp">Album</a><hr><br><br>
        <a id="menu" href="artista.php" target="pp">Artista </a><hr><br><br>
      </div>
    </aside>

    <iframe name="pp" href="brani.php"></iframe>

  </div>

	<footer>
		Created by: Francesco Bonso, Stefano Sartori, Bruno Valluzzi        contact us: <a href=""></a>

	</footer>
  </body>
</html>
