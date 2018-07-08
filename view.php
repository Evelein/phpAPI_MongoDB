<link href="style.css" rel="stylesheet">

<?php
require 'phpmongodb/vendor/autoload.php';

$client = new MongoDB\Client("mongodb://localhost:27017");
$companydb = $client->companydb; //Создание базы данных
$nameCollection = $_GET['id']; //GET-запрос
$collection = $companydb->$nameCollection; //Переход в коллекцию
$cursor = $collection->find(); //Вывод инфы с коллекции

echo '<table border="2">
    <thead>
  	<tr>
	        <th height="25">Название</th>
	        <th>Страна</th>
	        <th>Производитель</th>
		<th>Категория</th>
      	</tr>';

	foreach($cursor as $document) 
	{
		echo "<tr>";
		echo "<td>".$document->Название."</td>"; 
		echo "<td>".$document->Страна."</td>"; 
		echo "<td>".$document->Производитель."</td>"; 
		echo "<td>".$document->Категория."</td>";
		echo "</tr>"; 
	}
echo '</table>';
?>
