<?php
include 'fungsi.php';
include 'connection.php';
function hitung_tagihan_awal($harga, $jual)
{
    $tagihan = $harga * $jual;
    return $tagihan;
}
// query mengakses kelas dari table kamar
$query_kelas = mysqli_query($conn, "SELECT * FROM `kamar`;");
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
        margin-top: 4.7%;
        padding: 00px;
    }

    .btn-custom-width {
        min-width: 150px;
    }
</style>
<!-- header -->
<?php include 'header.php'; ?>
<!-- main program -->
<div class="container border p-3">
    <!-- Menampilkan judul halaman -->
    <h3 class="text-center">Form Pemesanan Kamar</h3>
    <!-- Instruksi Kerja Nomor 6. -->
    <!-- Menampilkan kelas bus restoran -->
    <img class="img-fluid rounded-pill" src="img/hotel.jpg" style="width : 20%;" alt="logo">

    <!-- Form untuk memasukkan data pemesanan. -->
    <form action="" method="post" id="formPemesanan">
        <div class="row py-2">
            <!-- Masukan data nama pelanggan. Tipe data text. -->
            <div class="col-sm-2"><label for="nama">Nama Pelanggan:</label></div>
            <div class="col-sm-6"><input required class="form-control" type="text" id="nama" name="nama"></div>
        </div>
        <div class="row py-2">
            <!-- Masukan data nama pelanggan. Tipe data text. -->
            <div class="col-sm-2"><label for="nama">Jenis Kelamin : </label></div>
            <div class="col-sm-6"><input class="form-check-input" type="radio" value="laki_laki" name="jkl"
                    id="laki_laki">
                <label class="form-check-label" for="laki_laki">
                    Laki - Laki
                </label>
                <input class="form-check-input" type="radio" name="jkl" value="perempuan" id="perempuan">
                <label class="form-check-label" for="perempuan">
                    Perempuan
                </label>
            </div>
        </div>
        <div class="row py-2">
            <!-- Masukan data nama pelanggan. Tipe data text. -->
            <div class="col-sm-2"><label for="nik">Nomor Identitas (NIK):</label></div>
            <!-- minimal 16 digit -->
            <div class="col-sm-6"><input required class="form-control" type="text" id="nik" name="nik" minlength="16">
            </div>
        </div>
        <div class="row py-2">
            <!-- Masukan pilihan lokasi kelas resto. -->
            <div class="col-lg-2"><label for="tipe">Tipe Kamar:</label></div>
            <div class="col-lg-2">
                <select id="kelas" name="kelas" class="form-select">
                    <option value="">- Pilih kelas -</option>
                    <?php
                    //	Instruksi Kerja Nomor 7.
                    //	Menampilkan dropdown pilihan lokasi kelas restoran berdasarkan data pada array $kelas.
                    while ($data = mysqli_fetch_array($query_kelas)) {
                        echo "<option value='" . $data['id_kamar'] . "'>" . $data['nama_kamar'] . "</option>";
                    }
                    ?>
                </select>
            </div>
        </div>
        <!-- penghitungan harga tiket perkelas yang dipilih -->
        <div class="row py-2">
            <!-- Masukan data nama pelanggan. Tipe data text. -->
            <div class="col-sm-2"><label for="harga">Harga Tiket :</label></div>
            <div class="col-sm-6"><input required readonly class="form-control" type="number" id="harga" name="harga">
            </div>
        </div>
        <div class="row py-2">
            <!-- Masukan data nama pelanggan. Tipe data text. -->
            <div class="col-sm-2"><label for="jadwal">Tanggal Pemesanan : </label></div>
            <div class="col-sm-6"><input required class="form-control" type="date" id="jadwal" name="jadwal"></div>
        </div>
        <div class="row py-2">
            <!-- Masukan data nama pelanggan. Tipe data text. -->
            <div class="col-sm-2"><label for="durasi">Durasi Menginap : <br></label></div>
            <div class="col-sm-6"><input required class="form-control" type="number" id="durasi" name="durasi">
            </div> Hari
        </div>
        <div class="row py-2">
            <!-- Masukan data nama pelanggan. Tipe data text. -->
            <div class="col-sm-2"><label for="breakfast">Termasuk Breakfast : </label></div>
            <div class="col-sm-6"><input class="form-check-input" type="checkbox" value="1" id="breakfast">
                <label class="form-check-label" for="breakfast">
                    Ya
                </label>
            </div>
        </div>

        <div class="row py-2">
            <div class="col-sm-2"><label for="total_bayar">Jumlah Total Bayar : </label></div>
            <div class="col-sm-6"><input required readonly class="form-control" type="number" id="total_bayar"
                    name="total_bayar"></div>
        </div>
        <!-- tombol -tombol -->
        <div class="col py-2">
            <div class="d-flex col-sm-8 justify-content-between">
                <button class="btn btn-custom-width btn-secondary" type="button" id="hitung">Hitung Total Bayar</button>
                <button class="btn btn-custom-width btn-primary" type="submit" value="Pesan" name="Pesan">Pesan
                    Tiket</button>
                <button class="btn btn-custom-width btn-danger" type="submit" value="cancel"
                    name="cancel">Cancel</button>
            </div>
        </div>
    </form>
</div>
<!-- ajax validation harga -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>

<!-- ajax validasi  -->
<script>
    $(document).ready(function () {
        $('#kelas').change(function () {
            var kelas = $('#kelas').val();
            $.ajax({
                url: 'proses.php',
                method: 'POST',
                data: {
                    kelas: kelas
                },
                success: function (response) {
                    console.log(response);
                    var result = JSON.parse(response);
                    if (result.success) {
                        $('#harga').val(result.harga);
                    } else {
                        $('#harga').val('');
                    }
                }
            });
        });
        $('#hitung').click(function () {
            // Menghitung biaya breakfast
            var biayaBreakfast = ($('#breakfast').prop('checked')) ? 80000 : 0;

            // Mengambil nilai harga dari input
            var harga = parseInt($('#harga').val());

            // Mengambil nilai durasi dari input
            var durasi = parseInt($('#durasi').val());

            // Mengambil nilai NIK dari input
            var nik = $('#nik').val();

            // Pemeriksaan panjang NIK
            if (nik.length !== 16) {
                alert('NIK harus memiliki 16 digit.');
                return; // Menghentikan eksekusi jika NIK tidak valid
            }

            // Menghitung total bayar
            var totalBayar = (harga * durasi) + biayaBreakfast;

            // Menampilkan hasil pada input total_bayar
            $('#total_bayar').val(totalBayar);

        });
    });
</script>

<?php
//	Kode berikut diksekusi setelah tombol Hitung ditekan.
if (isset($_POST['Pesan'])) {

    //	Variabel $dataPesanan berisi data-data pemesanan dari form dalam bentuk array.
    $dataPesanan = array(
        'kelas' => $_POST['kelas'],
        'nama' => $_POST['nama'],
        'jkl' => $_POST['jkl'],
        'nik' => $_POST['nik'],
        'jadwal' => $_POST['jadwal'],
        'durasi' => $_POST['durasi'],
        'total_bayar' => $_POST['total_bayar'],
    );
    // query mengakses kelas dari table kamar
    $kelas = $dataPesanan['kelas'];

    $query_harga = "SELECT harga FROM kamar WHERE id_kamar = '$kelas';";
    $result = $conn->query($query_harga);

    $hargaSatuan = 0;
    if ($result && $result->num_rows > 0) {
        $row = $result->fetch_assoc();
        $hargaSatuan = intval($row['harga']);
    }
    //	Variab el berisi path file data.json yang digunakan untuk menyimpan data pemesanan.
    $berkas = "data/data.json";

    //	Mengubah data pemesanan yang berbentuk array PHP menjadi bentuk JSON.
    $dataJson = json_encode($dataPesanan, JSON_PRETTY_PRINT);

    //	Instruksi Kerja Nomor 8.
    //	Menyimpan data pemesanan yang berbentuk JSON ke dalam file JSON
    file_put_contents($berkas, $dataJson);

    //	Instruksi Kerja Nomor 9.
    //	Mengambil data pemesanan dari file JSON
    $dataJson = file_get_contents($berkas);

    //	Mengubah data pemesanan dalam format JSON ke dalam format array PHP.
    $dataPesanan = json_decode($dataJson, true);

    // eksekusi akses database insert
    $berhasil = insertData($_POST);
    // var_dump($_POST['aksi']);
    // die();
    if ($berhasil) {
        echo "<script>alert('Data berhasil ditambahkan');</script>";
    } else {
        echo "query errorrrr" . $query;
    }
    $tagihanAwal = $_POST['durasi'] * $_POST['harga'];


    //	Menginisiasi variabel $diskon dengan nilai awal 0.
    $diskon = 0;

    //	Instruksi Kerja Nomor 10.
    //	Menghitung diskon.
    if ($_POST['durasi'] >= 3) {

        $diskon = 0.1;
    }

    //	Variabel $tagihanAkhir berisi nilai tagihan akhir yang didapat dari nilai tagihan awal dikurangi diskon.



    $kelasPenumpang = array(
        '1' => "Standart",
        '2' => "Duluxe",
        '3' => "Eksekutif",

    );
    $kelasLabel = $kelasPenumpang[$dataPesanan['kelas']];
    //	Menampilkan data pemesanan dan hasil perhitungan diskon dan tagihan.
    $total_diskon = $diskon * 100;
    echo "
				<br/>
				<div class='container ph-4'>
					<div class='row py-2'>
						<!-- Menampilkan nama pelanggan. -->
						<div class='col-lg-2'>Nama Pemesan</div>
						<div class='col-sm-6'>:" . $dataPesanan['nama'] . "</div>
					</div>
					<div class='row py-2'>
						<!-- Menampilkan nik pelanggan. -->
						<div class='col-lg-2'>No Identitas</div>
						<div class='col-sm-6'>:" . $dataPesanan['nik'] . "</div>
					</div>
					<div class='row py-2'>
						<!-- Menampilkan nomor HP pelanggan. -->
						<div class='col-lg-2'>Jenis Kelamin</div>
						<div class='col-sm-6'>: " . $dataPesanan['jkl'] . "</div>
					</div>
                    <div class='row py-2'>
						<!-- Menampilkan lokasi kelas restoran. -->
						<div class='col-lg-2'>Kelas Penumpang </div>
						<div class='col-sm-6'>: " . $kelasLabel . "</div>
					</div>
					<div class='row py-2'>
						<!-- Menampilkan jumlah penumpang non lansia. -->
						<div class='col-lg-2'>Jumlah Penumpang </div>
						<div class='col-sm-6'> : " . $dataPesanan['durasi'] . " Hari</div>
					</div>
					<div class='row py-2'>
						<!-- Menampilkan tagihan awal (sebelum diskon). -->
						<div class='col-lg-2'>Tagihan Awal</div>
						<div class='col-sm-6'> : Rp" . number_format($tagihanAwal, 0, ".", ".") . ",-</div>
					</div>
					<div class='row py-2'>
						<!-- Menampilkan tarif pemesanan. -->
						<div class='col-lg-2'>Diskon</div>
						<div class='col-sm-6'> : " . $total_diskon . "%</div>
					</div>
					<div class='row py-2'>
						<!-- Menampilkan Total Bayar (setelah diskon). -->
						<div class='col-lg-2'>Total Bayar</div>
						<div class='col-sm-6'> : Rp" . $_POST['total_bayar'];
    ",-</div>
					</div>
			</div>
			";
}
?>
</section>
<!-- footer -->
<?php include 'footer.php'; ?>
<!-- main form DaftarBeasiswa  -->
<!-- js -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm"
    crossorigin="anonymous"></script>
</body>

</html>