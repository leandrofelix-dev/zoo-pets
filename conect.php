<?php 
  try {
    $pdo = new PDO("mysql:host=localhost;dbname=zoo-pets","root","");
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  } catch(PDOException $e) {
    echo 'ERROR: ' . $e->getMessage();
  }
?>
