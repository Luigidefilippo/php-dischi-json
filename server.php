<?php

$dischi_str = file_get_contents("dischi.json");

$dischi = json_decode($dischi_str, true);

$result = [
    "results" => $dischi,
    "success" => true
];

header('Content-Type: application/json');

echo json_encode($result);