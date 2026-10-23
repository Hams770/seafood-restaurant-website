<?php
$dns = "mysql:host=localhost;dbname=restaurant;";
$user = "root";
$pass = "";
try {
  $conaction = new PDO($dns, $user, $pass);
  $conaction->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
  echo ("Connection failed: " . $e->getMessage());

}