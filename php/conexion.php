<?php
$link = "mysql:host=localhost;dbname=parental_control";
$username = "root";
$password = "root";

try {
  $pdo = new PDO($link, $username, $password);
  // set the PDO error mode to exception
//   $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
//   echo "Connectado";

} catch (PDOException $e) {
    print "¡Error!: " . $e->getMessage() . "<br/>";
    die();
}