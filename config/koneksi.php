<?php
session_start();

$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$dbname = "almardiy_j_obat";

$conn = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);
function cek_login()
{
  $result = isset($_SESSION['login']) ? $_SESSION['login'] : false;
  if (!$result) {
    header("Location: login.php");
    exit;
  }
  return $result;
}
