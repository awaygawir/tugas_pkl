<?php

$img = $_POST['image'];
$folderPath = "upload/";

$image_parts = explode(";base64,", $img);
$image_type_aux = explode("image/", $image_parts[0]);
$image_type = $image_type_aux[1];

$image_base64 = base64_decode($image_parts[1]);
$fileName = uniqid() . '.png';

$file = $folderPath . $fileName;
file_put_contents($file, $image_base64);

print_r($file);

$jam_masuk = date('Y-m-d H:i:s');
$status = 'Hadir';
$kelas_id = $_SESSION['user'];
$taruna_id = $_SESSION['user'];

$sql = "INSERT INTO absen (jam_masuk, status, kelas_id, taruna_id, bukti_foto) 
        VALUES (:jam_masuk, :status, :kelas_id, :taruna_id, :bukti_foto)";

$stmt = $conn->prepare($sql);

$stmt->bindParam(':jam_masuk', $jam_masuk, PDO::PARAM_STR);
$stmt->bindParam(':status', $status, PDO::PARAM_STR);
$stmt->bindParam(':kelas_id', $kelas_id, PDO::PARAM_INT);
$stmt->bindParam(':taruna_id', $taruna_id, PDO::PARAM_INT);
$stmt->bindParam(':bukti_foto', $file, PDO::PARAM_STR);

try {
    $stmt->execute();
    echo "Data berhasil dimasukkan ke dalam tabel.";
    header('location: /absen_pulang');
} catch (PDOException $e) {
    echo "Gagal memasukkan data: " . $e->getMessage();
}

?>