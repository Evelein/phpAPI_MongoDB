<?php
require 'vendor/autoload.php';

$client = new MongoDB\Client;
$companydb = $client->companydb; //Переход в базу данных
$collection = $companydb->Автозапчасти; //Переход в коллекцию
$collection2 = $companydb->Красота_и_здоровье;
$collection3 = $companydb->Медицина;
$collection4 = $companydb->Спорт;

$find = $collection->find(['Название' => ''. $test .'']);

	foreach ( $find as $data)
		{
			echo "<tr>";
			echo "<td>".$data->Название."</td>"; 
			echo "<td>".$data->Страна."</td>"; 
			echo "<td>".$data->Производитель."</td>"; 
			echo "<td>".$data->Категория."</td>";
			echo "</tr>"; 
		}

$find2 = $collection2->find(['Название' => ''. $test .'']);
	
	foreach ( $find2 as $data1)
		{
			echo "<tr>";
			echo "<td>".$data1->Название."</td>"; 
			echo "<td>".$data1->Страна."</td>"; 
			echo "<td>".$data1->Производитель."</td>"; 
			echo "<td>".$data1->Категория."</td>";
			echo "</tr>"; 
		}

$find3 = $collection3->find(['Название' => ''. $test .'']);
		
	foreach ( $find3 as $data2)
		{
			echo "<tr>";
			echo "<td>".$data2->Название."</td>"; 
			echo "<td>".$data2->Страна."</td>"; 
			echo "<td>".$data2->Производитель."</td>"; 
			echo "<td>".$data2->Категория."</td>";
			echo "</tr>"; 
		}

$find4 = $collection4->find(['Название' => ''. $test .'']);
	
	foreach ( $find4 as $data4)
		{
			echo "<tr>";
			echo "<td>".$data4->Название."</td>"; 
			echo "<td>".$data4->Страна."</td>"; 
			echo "<td>".$data4->Производитель."</td>"; 
			echo "<td>".$data4->Категория."</td>";
			echo "</tr>"; 
		}
?>
