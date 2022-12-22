<?php

$request = $_SERVER['REQUEST_URI'];
$path = ltrim($request, '/');

$userString = file_get_contents("user.json");
$users = json_decode($userString, true);

if (array_key_exists($path, $users)) {
  $user = $users[$path];
  include 'wish.php';

} else {
  include 'default.php';

}