<?php

include "database_setup.php";

$cerca=$_GET["cerca"];


// Controlla Chiavo tabella
$query= "SELECT titolo FROM canzoni WHERE $cerca LIKE '%titolo%')";
$result = mysqli_query($conn, $query);

while($row = mysqli_fetch_assoc($result)){

  echo $row;
  echo "<br/>";
}

$query1= "SELECT album FROM canzoni WHERE $cerca LIKE '%album%')";
$result1 = mysqli_query($conn, $query1);

while($row1 = mysqli_fetch_assoc($result1)){

  echo $row1;
  echo "<br/>";
}

$query2= "SELECT artista FROM canzoni WHERE $cerca LIKE '%artista%')";
$result2 = mysqli_query($conn, $query2);

while($row2 = mysqli_fetch_assoc($result2)){

  echo $row2;
  echo "<br/>";
}

mysql_close();

?>
