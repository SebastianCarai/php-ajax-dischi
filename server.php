<?php 
require __DIR__ . '/database.php';
$disks = json_encode($database);
header('Content-Type: application/json');
echo $disks;
?>