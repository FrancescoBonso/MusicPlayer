<?php  
session_start();
if (ISSET($_SESSION["user"]))  { Header("Location:01_FormGestioneDBcanzoni.php"); }
    else { 
    	Header("Location:00_FormLogin_admin.php");
		print_r($_SESSION);
	}
?>