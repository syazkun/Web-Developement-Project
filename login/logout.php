<?php
   session_start();
   include('config.php');
   include('functions.php');

   unset($_SESSION["username"]);
   unset($_SESSION["password"]);

   echo'You have cleaned session';
   echo '</br>';
   echo'You have been logged out.';
   header('Refresh: 1; URL = login.html');
   if(session_destroy()) {
      header("Location: login.html");
   }
?>