<?php

include "database_setup.php"

$cerca=$_POST["cerca"];


if(!$conn){
 echo "errore di connessione"; //die ("connection error.mysqli_connect:error()");
  exit();
}
// Controlla le chaivi dal DB
$query="SELECT * from song WHERE (canzone LIKE '%' . $cerca . '%') OR (album LIKE '%' . $cerca . '%') OR (artista LIKE '%' . $cerca . '%')";

$ris=mysqli_query($conn, $query);
if (!$query){
echo "errore di query1";
}

$n=mysqli_num_rows($ris);

if ($n>0) {
echo "$ris";

while ($linea=mysqli_fetch_array($ris)) {
  echo $linea['canzone']." ".$linea['album']." ".$linea['artista']." ".$linea['durata']." ".$linea['anno'];
 }
}
else {
 echo "Canzone non trovata";
 }

 mysqli_close($conn);


 ?>
