<?php
function hitung_tagihan_awal($harga, $jual)
{
    $tagihan = $harga * $jual;
    return $tagihan;
}

//	Instruksi Kerja Nomor 2.
//	Variabel $kelas berisi data kota lokasi kelas restoran dalam bentuk array.
$kelas = array("Harmoni", "Sarinah", "Grogol", "Senayan", "Pluit", "Cempaka");

//	Instruksi Kerja Nomor 3.
//	Mengurutkan array $kelas sesuai abjad A-Z.
sort($kelas);

//	Instruksi Kerja Nomor 4.
//	Variabel untuk menyimpan harga satuan nasi kotak.
$hargaSatuan = 50000;
?>

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>PAKET B</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
</head>
<!-- style  -->
<style>
    body {
        margin: 0px;
        padding: 00px;
    }

    .button.btn.btn-primary.linka {
        color: white !important;
        text-decoration: none;
    }
</style>
<!-- header -->
<?php include 'header.php'; ?>
<!-- main program -->
<div class="container mt-5 p-4 border">
    <!-- Menampilkan judul halaman -->
    <div class="container mt-5">
        <h2>About Us</h2>
        <p>Welcome to Hotel Booking! We are dedicated to providing you the best stay experience.</p>
        <p>Contact us at: <br>
            Address: 123 Hotel St, City<br>
            Phone: +1 (123) 456-7890<br>
            Email: info@hotelbooking.com</p>
    </div>
</div>
<!-- footer -->

<?php include 'footer.php'; ?>

<!-- js -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm"
    crossorigin="anonymous"></script>
</body>

</html>