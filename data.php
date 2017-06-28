<?php
include 'sqljapan.php';
$pdo = new pdo($dsn,$user,$passwd,$opt);

if(!isset($_GET['text']))
    header('Location:index.html');

$text = $_GET['text'];

$sql = "INSERT INTO text (text) VALUES (?)";
$stmt = $pdo->prepare($sql);
$stmt->execute([$text]);

header('Location:index.html');
?>