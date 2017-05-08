<?php 
	include "database_setup.php";
	session_start();

	print_r($_SESSION);

?>

<html>
	<head>
		<title>Database Canzoni</title>
	</head>
	<body>
		
		
		<div>
		<!-- aggiungiamo il form per inserire i dati -->
		<form name="form" method="post" action="02_GestioneDBcanzoni.php">
			
			<center>
				<h3>INSERIMENTO E CANCELLAZIONE CANZONI</h3>
				Titolo: <input type="text" name="titolo" placeholder="Titolo"> 
				<br/>		
				Artista: <input type="text" name="artista" placeholder="Artista"> 
				<br/>
				Album: <input type="text" name="album" placeholder="Album"> 
				<br/>			
				Youtube: <input type="text" name="linkyoutube" placeholder="Link a Youtube"> 
				<br/><br/>		
					
				<input type="submit" name="submit1" value="INSERISCI CANZONE">
				<input type="submit" name="submit2" value="CANCELLA CANZONE"> 
				<input type="submit" name="submit3" value="VISUALIZZA CANZONI"> 
				<input type="reset" value="ANNULLA"><!-- cancella il form -->			
				<br/><br/>
			</center>
		</form>
			<center>
				Ritorna alla <a href="Spotify.php">Pagina Iniziale</a>
				<br/><br/>

				<a href="Spotify.php"><img border="0" alt="Upload" src="home.png" width="50" height="50"></a>

				<form action="03_logout_admin.php" method="POST"><input type="submit" name="pulsante" value="Logout"></form>

			</center>
		</div>

		<div>
		<?php
			$sql = "SELECT id, titolo, artista, album, link_youtube FROM canzoni";
			$result = mysqli_query($conn, $sql);
		
			if (mysqli_num_rows($result) > 0) 
			{
			    // output data of each row

				echo "<table>";
				echo "<th>id</th>  <th>Titolo</th>  <th>Artista</th>  <th>Album</th>  <th>Link</th> ";
			    while($row = mysqli_fetch_assoc($result)) {
			        echo "

			        <tr>
			        <td> " . $row["id"]. " </td>
			        <td> " . $row["titolo"] . " </td>
			        <td> " . $row["artista"] . " </td>
			        <td> " . $row["album"] . " </td>
			        <td> " . $row["link_youtube"] . " </td>
			        <br/>
			        </tr>
			        ";
				}
				echo "</table>";

			}
			else { echo "0 results"; }

		?>
		</div>
	</body>
</html>