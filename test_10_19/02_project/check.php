<?php
include_once "user.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $account = $_POST["account"];
  $password = $_POST["password"];
	
  $user = (12);
  if ($user->(13)($account,$password)) {
    session_start();
    $_SESSION["user"] = $account;
    (14)("location:index.php");
  } else {
    (14)("location:login.php");
  }
}