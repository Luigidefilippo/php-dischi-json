<?php 
$dischi_str = file_get_contents("dischi.json");
$dischi =json_decode($dischi_str , true );


// Preparazione del risultato
$resul = [
    "results =>$dischi"
];

header('Content-Type : application/json');
echo json_decode($result);