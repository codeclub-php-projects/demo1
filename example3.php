<?php

//
function factorial($n) {
	if ($n === 1) {
		return 1;
	} else {
		return $n * factorial($n - 1);
	}
}

//
define('PI', 3.14);
define('E', 2.7183);
define('URL', 'http://kiev.itstep.org');

//
$grades = [
	'Иванов'  => 7.5,
	'Петров'  => 9.5,
	'Сидоров' => 8.5,
	'Федоров' => 6.5,
	'Пупкина' => 9.5
];

?>

<h5 style="margin-left: 200px;">
	<table width="400", border="1">
		<tr>
			<th>Число</th>
			<th>Факториал</th>
		</tr>
		<?php for ($i = 1; $i <= 10; $i++) { ?>
			<tr>
				<td><?=$i?></td>
				<td><?=factorial($i)?></td>
			</tr>
		<?php } ?>
	</table>
</h5>

<!---->
<hr>
<h5>
	<ol>
		<li>PI  = <?=PI?></li>
		<li>E   = <?=E?></li>
		<li>URL = <?=URL?></li>
	</ol>
	<a href="<?=URL?>">Перейти на ресурс</a>
</h5>

<!---->
<hr>
<h5>
	<pre>
		<?php print_r($grades); ?>
	</pre>
</h5>