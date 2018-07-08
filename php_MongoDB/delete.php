<?php
require 'vendor/autoload.php'; 

$client = new MongoDB\Client;
$companydb = $client->companydb;
$collection = $companydb->Автозапчасти;

$deleteResult = $collection->deleteMany
    (
      ['Название' => '']
    );

printf("Deleted %d documents", $deleteResult->getDeletedCount());
?>
