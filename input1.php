<!DOCTYPE html>
<html>
	<head>
		<link href="style.css" rel="stylesheet">
		<title>
			API
		</title>
	</head>
	<body>
		<div align="left">
			<table border="2">
    				<thead>
    					<tr>
				        <th height="25">Название</th>
				        <th>Страна</th>
				        <th>Производитель</th>
				        <th>Категория</th>
        				</tr>
    				</thead>
    				<?php
					$test = $_POST['inputSearch']; //POST-запрос 
					require 'phpmongodb/find.php';
				?>
			</table>
		</div>
	</body>
</html>
