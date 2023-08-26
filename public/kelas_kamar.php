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
<div class="container p-4 border">
    <!-- Menampilkan judul halaman -->


    <!-- kELAS bUS  -->

    <section id="bus_kls">
        <div class="container mx-auto py-5 h-100">

            <div class="card my-5">
                <div class="card-header">
                    <h3>STANDART</h3>
                </div>
                <div class="card-body align-items-centered">
                    <blockquote class="blockquote mb-0">
                        <div class="d-grid gap-2 mt-2">
                            <div class="card" style="width: 18rem;">
                                <img src="img/standart.jpg" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <p class="card-text">Some quick example text to build on the card title and make up
                                        the bulk of the card's content.</p>
                                </div>
                            </div>
                            <button class="btn btn-primary" type="button"
                                style="background-color : #17055B!important;"><a class="linka" href="index.php">Pesan
                                    Sekarang</a></button>
                        </div>
                    </blockquote>
                </div>
            </div>
            <div class="card my-5">
                <div class="card-header">
                    <h3>DULUXE</h3>
                </div>
                <div class="card-body">
                    <blockquote class="blockquote mb-0">
                        <div class="d-grid gap-2 mt-2">
                            <div class="card" style="width: 18rem;">
                                <img src="img/duluxe.jpg" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <p class="card-text">Some quick example text to build on the card title and make up
                                        the bulk of the card's content.</p>
                                </div>
                            </div>
                            <button class="btn btn-primary" type="button"
                                style="background-color : #17055B!important;"><a class="linka" href="index.php">Pesan
                                    Sekarang</a></button>
                        </div>
                    </blockquote>
                </div>
            </div>
            <div class="card my-5">
                <div class="card-header">
                    <h3>EKSEKUTIF</h3>
                </div>
                <div class="card-body">
                    <blockquote class="blockquote mb-0">
                        <div class="d-grid gap-2 mt-2">
                            <div class="card" style="width: 18rem;">
                                <img src="img/eksekutif.jpg" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <p class="card-text">Some quick example text to build on the card title and make up
                                        the bulk of the card's content.</p>
                                </div>
                            </div>
                            <button class="btn btn-primary" type="button"
                                style="background-color : #17055B!important;"><a class="linka" href="index.php">Pesan
                                    Sekarang</a></button>
                        </div>
                    </blockquote>
                </div>
            </div>
    </section>
</div>
<!-- footer -->

<?php include 'footer.php'; ?>

<!-- js -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm"
    crossorigin="anonymous"></script>
</body>

</html>