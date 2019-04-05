<?php
   
   session_start();
   
   //checks for active session
   $check_user = $_SESSION['login'];
	
   //redirects to login if session is invalid
   if(!isset($_SESSION['login'])){
      header("location:adminLoginPage.php");
   }
?>