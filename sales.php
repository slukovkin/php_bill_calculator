<?php

require './app/templates/header.php';

require_once './vendor/db.php';

$electro = mysqli_query($db, "SELECT * FROM `electro`");
$water = mysqli_query($db, "SELECT * FROM `water`");
$gaz = mysqli_query($db, "SELECT * FROM `gaz`");

function convert($data){
	$data = mysqli_fetch_all($data);
	return $data[count($data) - 1];
}

$electro = convert($electro);
$water = convert($water);
$gaz = convert($gaz);

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="./assets/css/style.css">
	<title>Document</title>
</head>
<body>
	<div class="wrapper">
		<table>
			<tbody>
				<tr>
					<th>Назначение</th>
					<th>Дата</th>
					<th>Предыдущее</th>
					<th>Текущее</th>
					<th>Количество</th>
					<th>Сумма оплаты</th>
				</tr>
				<tr>
					<td>Электроснабжение</td>
					<td><?= $electro[5] ?></td>
					<td><?= $electro[1] ?></td>
					<td><?= $electro[2] ?></td>
					<td><?= $electro[2] - $electro[1] ?></td>
					<td><?= $electro[4] ?></td>
				</tr>
				<tr>
					<td>Водоснабжение</td>
					<td><?= $water[5] ?></td>
					<td><?= $water[1] ?></td>
					<td><?= $water[2] ?></td>
					<td><?= $water[2] - $water[1] ?></td>
					<td><?= $water[4] ?></td>
				</tr>
				<tr>
					<td>Газоснабдение</td>
					<td><?= $gaz[5] ?></td>
					<td><?= $gaz[1] ?></td>
					<td><?= $gaz[2] ?></td>
					<td><?= $gaz[2] - $gaz[1] ?></td>
					<td><?= $gaz[4] ?></td>
				</tr>
			</tbody>
		</table>
	</div>
</body>
</html>