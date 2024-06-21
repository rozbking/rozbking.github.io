<?php

// Directory path to scan for images
$imageDirectory = 'Website_photos_rbking/WorkingAreasforSlideshow/landscapes';

// Initialize array to store image URLs
$imageUrls = [];

// Scan the directory for image files
if (is_dir($imageDirectory)) {
    $files = scandir($imageDirectory);
    foreach ($files as $file) {
        // Check if the file is an image (allowed extensions: jpg, jpeg, png, gif)
        $ext = pathinfo($file, PATHINFO_EXTENSION);
        if (in_array(strtolower($ext), ['jpg', 'jpeg', 'png', 'gif'])) {
            // Build the full URL to the image
            $imageUrl = $imageDirectory . '/' . $file;
            // Add image URL to array
            $imageUrls[] = $imageUrl;
        }
    }
}

// Output image URLs as JSON
header('Content-Type: application/json');
echo json_encode($imageUrls);
