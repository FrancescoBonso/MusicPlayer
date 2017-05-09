<?php include "database_setup.php"; ?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Album</title>
</head>

<body>

<?php

$query = "SELECT distinct album FROM canzoni";
$result = mysqli_query($conn, $query);

while($row = mysqli_fetch_assoc($result)) {
  //print_r($row);
  echo "<form id="albm">";
  echo "<a href="link" onclick="document.getElementById('albm').submit()">".$row["album"]."</a>";
  echo "<br/>";
  echo "</form>";

}

?>

</body>
</html>



 
