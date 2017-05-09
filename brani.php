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

  	<div id="canzone">
		<?php
		
			$query = "SELECT distinct titolo, link_youtube, artista, album FROM canzoni";
			$result = mysqli_query($conn, $query);

			while($row = mysqli_fetch_assoc($result)) {
			  //print_r($row);
			  echo "<a link='".$row["link_youtube"]."' onclick='document.getElementById(\"YouTubeFrame\").setAttribute(\"src\", this.getAttribute(\"link\"))' >".$row["titolo"]."</a>";
			  echo "<br/>";
			  echo "".$row["artista"]."/".$row["album"]."";
			  echo "<br/><br/>";

			}
		?>
	</div>
	<div>
	<iframe width="420" height="315" frameborder="0" allowfullscreen id="YouTubeFrame"></iframe>-->
 	</div>
 </body>
</html>