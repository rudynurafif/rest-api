<?php 

echo "<pre>";

$data = file_get_contents('coba.json');
$mahasiswa = json_decode($data, true); // array asosiatif jika true

var_dump($mahasiswa);
echo $mahasiswa[0]["mentor"]["mentor1"];

?>