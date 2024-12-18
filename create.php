<?php
header('Content-Type: application/json');
include "konek.php";

$id = $_POST['id'];
$judul = $_POST['judul'];
$pengarang = $_POST['pengarang'];
$penerbit = $_POST['penerbit'];
$kategori = $_POST['kategori'];
$sinopsis = $_post['sinopsis'];
$tahun_terbit = $_POST['tahun_terbit'];

$stmt = $db->prepare("INSERT INTO books (id, judul, pengarang, penerbit, kategori, sinopis, tahun_terbit) VALUES (?, ?, ?, ?, ?)");
$result = $stmt->execute([$name, $birth, $gender, $religion, $address]);

echo json_encode([
    'success' => $result
]);
?>