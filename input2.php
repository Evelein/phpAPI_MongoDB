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
				        <th height="25">Категории</th>
        			</tr>
        			<?php 
					require 'phpmongodb/listCollections.php'
					?>
    			</thead>
			</table>
		</div>
	</body>
</html>
