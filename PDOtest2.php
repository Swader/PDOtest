<?php
$pdo = new PDO('mysql:host=localhost;db=clicker;charset=utf8', 'root' );


if (isset($_POST['add'])) {
	$number = $_POST['add'];
	$pdo->exec("UPDATE clickertable SET click = click + '$number'");
	unset($number);
}

/*
$result = mysqli_query($link, 'SELECT click FROM clickertable');
while ($row = mysqli_fetch_array($result))
{
	$output = $row['click'];
}
*/
$stmt = $pdo->execute('SELECT click FROM clickertable');
$row = $stmt->fetchAll();
var_dump($row);



include 'click.html.php';
?>
