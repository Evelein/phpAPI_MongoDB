<?php 
require 'vendor/autoload.php';

$client = new MongoDB\Client("mongodb://localhost:27017");
$companydb = $client->companydb;
$listCollections = $companydb->listCollections();

foreach ($listCollections as $collectionName) //Просмотр всех имеющихся коллекций 
	{	
		echo "<tr>";
		$coll = $collectionName->getName();
		echo "<td><a href='view.php?id=".$coll."'>$coll</a></td>"; 
		echo "</tr>";
	}
?>
