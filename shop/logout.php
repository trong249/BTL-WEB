<?php
setcookie("user_login","", time() - 3600, '/');
session_start();
$_SESSION = array();
session_unset();
session_destroy();

header("Location: trang_chu.php");
exit();

?>