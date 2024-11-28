<?php

$user = 'rikbakker';
$password = 'RAB911683';
$database = 'webshop_';
$servername = 'localhost:3306';

$dbConnection = null;
$dbStatement = null;

try {
  $dbConnection = new PDO("mysql:host=$servername;dbname=$database", $user, $password);
} catch(PDOException $error) {
  echo $error->getErrorMessage();
}
