<?php
function insertData($data)
{
    $kelas = $_POST['kelas'];
    $nama = $_POST['nama'];
    $nik = $_POST['nik'];
    $jadwal = $_POST['jadwal'];
    $noHP = $_POST['noHP'];
    $penumpang1 =$_POST['penumpang1'];
    $penumpang2 = $_POST['penumpang2'];

    // Contoh: Simpan data ke database
    $conn = $GLOBALS['conn'];
    $query = "INSERT INTO `pemesanan` (`id_pemesanan`, `nama`, `nik`, `no_hp`, `id_kelas`, `jadwal`, `penumpang1`, `penumpang2`) VALUES (NULL, '$nama', '$nik', '$noHP', '$kelas', '$jadwal', '$penumpang1', '$penumpang2');";
    $result = mysqli_query($conn, $query);

    if ($result) {
        return true; // Proses tambah data berhasil
    } else {
        return false; // Proses tambah data gagal
    }

}