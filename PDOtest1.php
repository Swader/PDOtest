<?php 
$pdo = new PDO('mysql:host=localhost;dbname=clicker;charset=utf8', 'root' );

$sql = "SELECT click FROM clickertable";


$stmt = $pdo->prepare($sql);



$stmt->execute();





$result = $stmt->fetchAll(PDO::FETCH_CLASS, 'Album');
class Album {}
//$result = $stmt->fetchAll(PDO::FETCH_ASSOC);
//$result = $stmt->fetchAll(PDO::FETCH_OBJ);
var_dump($result);
?>
