<?php 

session_start();
session_unset();
session_destroy();
header('Location: '.$file_location.'index.php');

?>