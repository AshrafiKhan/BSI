<?php
session_start();

unset($_SESSION['auth']);
$_SESSION['success'] = "<strong>".$_SESSION['name']. "</strong>, See you soon ...";
// session_unset();
header("Location: ../index.php");

?>