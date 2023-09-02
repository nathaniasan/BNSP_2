<?php
function insertData($data)
{
    $kelas = $_POST['kelas'];
    $nama = $_POST['nama'];
    $nik = $_POST['nik'];
    $jkl = $_POST['jkl'];
    $kelas = $_POST['kelas'];
    $jadwal = $_POST['jadwal'];
    $durasi = $_POST['durasi'];
    $total_bayar = $_POST['total_bayar'];
    $email = $_POST['email'];

    // Contoh: Simpan data ke database
    $conn = $GLOBALS['conn'];
    $query = "INSERT INTO `pemesanan` (`id_pemesanan`, `nama`, `nik`, `email`,`jkl`, `id_kamar`, `jadwal`, `durasi`, `id_diskon`, `total_bayar`) VALUES (NULL, '$nama', '$nik','$email', '$jkl', '$kelas', '$jadwal', '$durasi', '1', '$total_bayar');;";
    $result = mysqli_query($conn, $query);

    if ($result) {
        return true; // Proses tambah data berhasil
    } else {
        return false; // Proses tambah data gagal
    }

}