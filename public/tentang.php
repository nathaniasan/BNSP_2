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
<div class="bg-light">
    <div class="container py-5">
        <div class="row h-100 align-items-center py-5">
            <div class="col-lg-6">
                <h1 class="display-4">About us page</h1>
                <p class="lead text-muted mb-0">Temukan dunia elegansi dan kenyamanan di [Nama Hotel], di mana setiap
                    menginap adalah pengalaman yang tak terlupakan. Terletak di jantung <b>Bali , Denpasar</b>, hotel
                    kami
                    menawarkan perpaduan sempurna antara kemewahan modern dan daya tarik yang abadi. Baik Anda di sini
                    untuk urusan bisnis atau liburan, kami memiliki segala yang Anda butuhkan untuk membuat penginapan
                    Anda tak terlupakan.</p>
                <p class="lead text-muted">Snippet by <a href="https://www.instagram.com/nathaniasans/"
                        class="text-muted">
                        <u>PT. Bali Hotel</u></a>
                </p>
            </div>
            <div class="col-lg-6 d-none d-lg-block"><img src="img/hotell.jpg" alt="" class="img-fluid"></div>
        </div>
    </div>
</div>

<div class="bg-white py-5">
    <div class="container py-5">
        <div class="row align-items-center mb-5">
            <div class="col-lg-6 order-2 order-lg-1"><i class="fa fa-bar-chart fa-2x mb-3 text-primary"></i>
                <h2 class="font-weight-light">Lorem ipsum dolor sit amet</h2>
                <p class="font-italic text-muted mb-4">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do
                    eiusmod tempor incididunt ut labore et dolore magna aliqua.</p><a href="#"
                    class="btn btn-light px-5 rounded-pill shadow-sm">Learn More</a>
            </div>
            <div class="col-lg-5 px-5 mx-auto order-1 order-lg-2"><img
                    src="https://bootstrapious.com/i/snippets/sn-about/img-1.jpg" alt="" class="img-fluid mb-4 mb-lg-0">
            </div>
        </div>
        <div class="row align-items-center">
            <div class="col-lg-5 px-5 mx-auto"><img
                    src="https://www.instagram.com/nathaniasans/https://www.instagram.com/nathaniasans/" alt=""
                    class="img-fluid mb-4 mb-lg-0"></div>
            <div class="col-lg-6"><i class="fa fa-leaf fa-2x mb-3 text-primary"></i>
                <h2 class="font-weight-light">Lorem ipsum dolor sit amet</h2>
                <p class="font-italic text-muted mb-4">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do
                    eiusmod tempor incididunt ut labore et dolore magna aliqua.</p><a href="#"
                    class="btn btn-light px-5 rounded-pill shadow-sm">Learn More</a>
            </div>
        </div>
    </div>
</div>

<div class="bg-light py-5">
    <div class="container py-5">
        <div class="row mb-4">
            <div class="col-lg-5">
                <h2 class="display-4 font-weight-light"><b>Our team</b></h2>
                <p class="font-italic text-muted">Datanglah dan rasakan daya tarik Bali Hotel. Petualangan tak
                    terlupakan Anda dimulai di sini.. </p>
            </div>
        </div>

        <div class="row text-center">
            <!-- Team item-->
            <div class="col-xl-3 col-sm-6 mb-5">
                <div class="bg-white rounded shadow-sm py-5 px-4"><img
                        src="https://bootstrapious.com/i/snippets/sn-about/avatar-4.png" alt="" width="100"
                        class="img-fluid rounded-circle mb-3 img-thumbnail shadow-sm">
                    <h5 class="mb-0">Budi Andi</h5><span class="small text-uppercase text-muted">CEO -
                        Founder</span>
                    <ul class="social mb-0 list-inline mt-3">
                        <li class="list-inline-item"><a href="#" class="social-link"><i
                                    class="fa fa-facebook-f"></i></a></li>
                        <li class="list-inline-item"><a href="#" class="social-link"><i class="fa fa-twitter"></i></a>
                        </li>
                        <li class="list-inline-item"><a href="#" class="social-link"><i class="fa fa-instagram"></i></a>
                        </li>
                        <li class="list-inline-item"><a href="#" class="social-link"><i class="fa fa-linkedin"></i></a>
                        </li>
                    </ul>
                </div>
            </div>
            <!-- End-->

            <!-- Team item-->
            <div class="col-xl-3 col-sm-6 mb-5">
                <div class="bg-white rounded shadow-sm py-5 px-4"><img
                        src="https://bootstrapious.com/i/snippets/sn-about/avatar-3.png" alt="" width="100"
                        class="img-fluid rounded-circle mb-3 img-thumbnail shadow-sm">
                    <h5 class="mb-0">Samuel Sitorus</h5><span class="small text-uppercase text-muted">CEO -
                        Founder</span>
                    <ul class="social mb-0 list-inline mt-3">
                        <li class="list-inline-item"><a href="#" class="social-link"><i
                                    class="fa fa-facebook-f"></i></a></li>
                        <li class="list-inline-item"><a href="#" class="social-link"><i class="fa fa-twitter"></i></a>
                        </li>
                        <li class="list-inline-item"><a href="#" class="social-link"><i class="fa fa-instagram"></i></a>
                        </li>
                        <li class="list-inline-item"><a href="#" class="social-link"><i class="fa fa-linkedin"></i></a>
                        </li>
                    </ul>
                </div>
            </div>
            <!-- End-->

            <!-- Team item-->
            <div class="col-xl-3 col-sm-6 mb-5">
                <div class="bg-white rounded shadow-sm py-5 px-4"><img
                        src="https://bootstrapious.com/i/snippets/sn-about/avatar-2.png" alt="" width="100"
                        class="img-fluid rounded-circle mb-3 img-thumbnail shadow-sm">
                    <h5 class="mb-0">Annisaa</h5><span class="small text-uppercase text-muted">CEO -
                        Founder</span>
                    <ul class="social mb-0 list-inline mt-3">
                        <li class="list-inline-item"><a href="#" class="social-link"><i
                                    class="fa fa-facebook-f"></i></a></li>
                        <li class="list-inline-item"><a href="#" class="social-link"><i class="fa fa-twitter"></i></a>
                        </li>
                        <li class="list-inline-item"><a href="#" class="social-link"><i class="fa fa-instagram"></i></a>
                        </li>
                        <li class="list-inline-item"><a href="#" class="social-link"><i class="fa fa-linkedin"></i></a>
                        </li>
                    </ul>
                </div>
            </div>
            <!-- End-->

            <!-- Team item-->
            <div class="col-xl-3 col-sm-6 mb-5">
                <div class="bg-white rounded shadow-sm py-5 px-4"><img
                        src="https://bootstrapious.com/i/snippets/sn-about/avatar-1.png" alt="" width="100"
                        class="img-fluid rounded-circle mb-3 img-thumbnail shadow-sm">
                    <h5 class="mb-0">Nathania</h5><span class="small text-uppercase text-muted">CEO - Founder</span>
                    <ul class="social mb-0 list-inline mt-3">
                        <li class="list-inline-item"><a href="#" class="social-link"><i
                                    class="fa fa-facebook-f"></i></a></li>
                        <li class="list-inline-item"><a href="#" class="social-link"><i class="fa fa-twitter"></i></a>
                        </li>
                        <li class="list-inline-item"><a href="#" class="social-link"><i class="fa fa-instagram"></i></a>
                        </li>
                        <li class="list-inline-item"><a href="#" class="social-link"><i class="fa fa-linkedin"></i></a>
                        </li>
                    </ul>
                </div>
            </div>
            <!-- End-->

        </div>
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