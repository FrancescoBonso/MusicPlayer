<?php include "database_setup.php"; 
session_start();?>

<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
	<meta charset="utf-8">
</head>

<body>

<?php    
  $user=$_POST["username"];

  $query="SELECT username FROM admin WHERE '$user'=username";
  
  $result=mysqli_query($conn, $query);
  if (!$result) {
    echo "errore di query".mysqli_error();
    exit();
  }

  $n=mysqli_num_rows($result);
  $result=mysqli_fetch_array($result);

  if ($n==1) {
    
    $_SESSION["user"] = $result["username"];
    Header("Location:01_FormGestioneDBcanzoni.php");
    
  }
  else{ echo "Vecio svegliati"; }
  
  mysqli_close($conn);

?>
</body>
</html>