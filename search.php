<?php
// search.php

// Ambil nilai pencarian dari formulir
$label = isset($_POST['label']) ? $_POST['label'] : '';
$location = isset($_POST['location']) ? $_POST['location'] : '';
$skill = isset($_POST['skill']) ? $_POST['skill'] : '';
$position = isset($_POST['position']) ? $_POST['position'] : '';

// Konstruksi URL dengan parameter pencarian
$searchURL = '/search?q=';

if ($label) {
    $searchURL .= 'label:' . $label . '+';
}

if ($location) {
    $searchURL .= 'location:' . $location . '+';
}

if ($skill) {
    $searchURL .= 'skill:' . $skill . '+';
}

if ($position) {
    $searchURL .= 'position:' . $position . '+';
}

// Kembalikan URL hasil pencarian
echo $searchURL;
?>
