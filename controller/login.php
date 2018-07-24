<?php
require_once "../config.php";

$username = $_POST['email'];
$password = $_POST['password'];

$check = "SELECT * FROM users WHERE email = ? AND password = ?";
$query = $db->prepare($check);

$query->bind_param('ss', $username, $password);

$query->execute();

if($query->fetch()) {
  $_SESSION['login'] = 1;
  $_SESSION['user'] = $username;

  header('Location: ../feed.php');
  exit;
}
else {
  $_SESSION['message'] = "email does not exist";
  $_SESSION['notify'] = "error";

  header('Location: ../login.php');
  exit;
}
