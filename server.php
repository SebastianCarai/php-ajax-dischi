<?php 
require __DIR__ . '/database.php';
$selected_genre = $_GET['genre'];
$filtered_disks =[];
foreach($database as $album){
    if($album['genre'] === $selected_genre){
        $filtered_disks[] = $album;
    }  
};
if(strlen($selected_genre) == 0){
    $disks = json_encode($database);
} else{
    $disks = json_encode($filtered_disks);
}
header('Content-Type: application/json');
echo $disks;
?>