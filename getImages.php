<?php
header('Content-Type: application/json');

$imagesDir = 'Website_photos_rbking/WorkingAreasforSlideshow/landscapes';
$images = glob($imagesDir . '*.{jpg,jpeg,png,gif}', GLOB_BRACE);
$imageList = array();

foreach($images as $image) {
    $imageList[] = $image;
}

echo json_encode($imageList);
?>
