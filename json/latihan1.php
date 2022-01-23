<?php 

echo "<pre>";

// $mahasiswa = [
//   [
//     "nama" => "Rudy Nurafif",
//     "nim"  => "C42150083",
//     "email" => "rudynurafif@gmail.com"
//   ],
//   [
//     "nama" => "Mamang Nurafif",
//     "nim"  => "C42150084",
//     "email" => "rudynurafif@gmail.com"
//   ]
// ];

$dbh = new PDO('mysql:host=localhost;dbname=phpdasar', 'root', '');
$db = $dbh->prepare('SELECT * FROM handphones');
$db->execute();
$handphones = $db->fetchAll(PDO::FETCH_ASSOC);

$data = json_encode($handphones);
echo $data;

?>