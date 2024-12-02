<?php 
session_start();

session_destroy();
header("location: formulario login.php");
 
?>
