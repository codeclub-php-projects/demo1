<?php
	$user = 'Admin';
	$students = [
		'Иванов', 'Петров', 'Сидоров', 'Федоров', 'Пупкин'
	];
?>

<!DOCTYPE html>
<html>
<head>
	<title>Пример шаблонизации</title>
	<style>
		body {
			text-align: center;
			font: 13pt 'Trebuchet MS';
			color: gray;
		}
		span {
			color: red;
		}
	</style>
</head>
<body>
	<h2>Пример шаблонизации</h2>
	<h3>Каталог товаров</h3>
	<!-- -->
	<hr>
	<h5>
		Приветствуем Вас, 
		<span><?=$user?></span>	
	</h5>
	<h5>
		<?php if ($user == 'Admin') {  ?>
			<a href="https://www.bing.com">Добавить товар</a>
		<?php } else { ?>
			<span style="green">Редактирование недоступно</span>
		<?php } ?>
	</h5>
	<!-- -->
	<hr>
	<h5>
		<?php for ($i = 0; $i < count($students); $i++) { ?>
			<span style="color: darkcyan">
				<?=$i+1?>. &nbsp;
				<?=$students[$i]?>		
			</span>
			<br>
		<?php } ?>
	</h5>
	<!-- -->
	<hr>
	<h5>
		<ul style="text-align: left; margin-left: 300px">
		<?php foreach($students as $s) { ?>	
			<li><?=$s?></li>
		<?php } ?>
		</ul>
	</h5>
</body>
</html>