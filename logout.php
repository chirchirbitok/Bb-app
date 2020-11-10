<?php
session_start();

session_destroy();
session_unset();
unset($_SESSION["authlog"]);

header("Location: form.php");
exit();
?>