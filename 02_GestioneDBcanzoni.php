<a href=""></a><?php include "database_setup.php"; 
session_start();?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>GestioneDB</title>
</head>

<body>

<?php

	$titolo=$_POST['titolo'];
	$artista=$_POST['artista'];
	$album=$_POST['album'];
	$linkyoutube=$_POST['linkyoutube'];

//INSERIMENTO NUOVO RECORD
	if(isset($_POST['submit1']))
	{	
		if (!null==$titolo AND $artista AND $album AND $linkyoutube)
		{
			$sql = "INSERT INTO canzoni (titolo, artista, album, link_youtube)
				VALUES ('".$titolo."','".$artista."','".$album."','".$linkyoutube."');";

			if (mysqli_query($conn, $sql)) {
				echo "Canzone inserita con successo";
			} else { echo "Error: " . $sql . "<br>" . mysqli_error($conn); }
		} else {echo "Errore: Non hai compilato tutti i campi!";}

	mysqli_close($conn);	
	}


//CANCELLAZIONE CANZONE
	if(isset($_POST['submit2']))
	{		
		//stringa SQL per cancellare una canzone
		$sql = "DELETE FROM canzoni WHERE link_youtube= '$linkyoutube'"; //problema! Non funziona

		if ($conn->query($sql) === TRUE) {
		    echo "Record deleted successfully";
		} 
		else { echo "Error deleting record: " . $conn->error; }	
		
	mysqli_close($conn);	
	}


//STAMPA TABELLA CANZONI	
	if(isset($_POST['submit3']))
	{
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

		} else { echo "0 results"; }

		mysqli_close($conn);
	}

?>

<br/>
Ritorna alla <a href="Spotify.php">Pagina Iniziale</a>

Ritorna alla <a href="01_FormGestioneDBcanzoni.php">Pagina Precedente</a>

<a href="Spotify.php"><img border="0" alt="Upload" src="home.png" width="50" height="50" align="right"></a>

<form action="03_logout_admin.php" method="POST"><input type="submit" name="pulsante" value="Logout"></form>

</body>
</html>