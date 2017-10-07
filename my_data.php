<?php
	$str = file_get_contents('data.json');
	$data = json_decode($str, true);
	$num = 0;
?>

<!DOCTYPE html>
<html>
<head>
	<title>Домашняя задание.2.1</title>
	<meta charset="utf-8">
</head>
<body>
		<h1>Телефонная книжка</h1>
	<?php foreach ($data as $item) : ?>
	
	<table border="1" cellpadding="10">
		<tr>

			<th><?=$item['Num']; ?></th>
			<th><?=$item['Name']; ?></th>
			<th><?=$item['Address']; ?></th>
			<th><?=$item['E-mail']; ?></th>

		</tr>
	
	</table>

	<?php endforeach ?>
</html>
