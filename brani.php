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
   <title>Brani</title>
   <link rel="stylesheet" href="spotistyle.css">
 </head>
 <body>

  	<iframe id="canzone">
		<?php
		
			$query = "SELECT distinct titolo, link_youtube, artista, album FROM canzoni";
			$result = mysqli_query($conn, $query);

			while($row = mysqli_fetch_assoc($result)) {
			  //print_r($row);
			  echo "<a href='".$row["link_youtube"]."' onclick='loadLink(this)' >".$row["titolo"]."</a>";
			  echo "<br/>";
			  echo "".$row["artista"]."/".$row["album"]."";
			  echo "<br/><br/>";

			}
		?>
	</iframe>

	<iframe id="YouTubeFrame" src="t.getAttribute('href')"></iframe>




 </body>
</html>