<?php


$pdo = new PDO("mysql:host=localhost;dbname=dinomuseum", "root", "root");

$sql = "SELECT * FROM game";
$stmt = $pdo->prepare($sql);
$stmt->execute();

$educs = $stmt->fetchAll(PDO::FETCH_ASSOC);
