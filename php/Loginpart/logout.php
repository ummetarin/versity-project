<?php

session_start();
$_SESSION = array();

session_destroy();
header("Location: http://localhost:3000/php/Loginpart/Login.php");
exit;
?>
