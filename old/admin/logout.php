<?
require_once("../includes/dbsmain.inc.php");
ob_start();
session_destroy();
header("Location: index.php");
?>