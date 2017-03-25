<?php

$firstTable = file_get_contents('./document.json');
$secondTable = json_decode($firstTable, true); 
?>

<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<title>Homework 5</title>
	<link href="css/normalize.css" rel="stylesheet" />
	<link href="css/style.css" rel="stylesheet" />
</head>
<body>
	<table>
		<thead>
			<tr>
				<th>Имя</th>
				<th>Фамилия</th>
				<th>Адрес</th>
				<th>Телефон</th>
			</tr>
		</thead>
		<tbody>
		<?php foreach ($secondTable as $item): ?>
			<tr>
				<td><?php echo $item['firstName'] ?></td>
				<td><?php echo $item['lastName'] ?></td>
				<td><?php echo $item['address'] ?></td>
				<td><?php echo $item['phoneNumber'] ?></td>
			</tr>
		<?php endforeach; ?>
		</tbody>
	</table>
</body>
</html>
