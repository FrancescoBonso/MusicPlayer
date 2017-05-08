<?php include "database_setup.php"; ?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Admin_login</title>
  </head>
  <body>
<br>
  <center><p>

    <form action="00_login_admin.php" method="post">

    <input type="text" name="username" placeholder="Admin"><br>
    <input type="password" name="password" placeholder="Password"><br><br>
    <input type="submit" name="invio" value="Accedi">

   </form>
   <br/><br/>
   <a href="Spotify.php"><img border="0" alt="Upload" src="home.png" width="50" height="50"></a>
 </p></center>

</body>
</html>