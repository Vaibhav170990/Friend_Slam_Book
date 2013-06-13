<?php
session_start(); # NOTE THE SESSION START
//session_unset();
session_destroy();
header("Location: index.php");
exit(); # NOTE THE EXIT
?>