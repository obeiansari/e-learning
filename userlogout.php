<?php
session_start();
session_destroy();
unset($_SESSION['log_email']);
header('location: index.php');

?>