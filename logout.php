<?php

session_start();
 
session_destroy();
 
// Redirect to login page
header("location: LoginInterface.html");
exit;
?>