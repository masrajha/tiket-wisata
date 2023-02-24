<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Wisata Lampung</title>

    <!-- Tautan ke file CSS Bootstrap -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.1.3/css/bootstrap.min.css" />

    <!-- Tautan ke file JavaScript Bootstrap -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.1.3/js/bootstrap.bundle.min.js"></script>

</head>

<body>
<?php
$host = "localhost"; // host database
$username = "sipuwebi_test"; // username database
$password = "o0z98EI@;*ZB"; // password database
$dbname = "sipuwebi_test"; // nama database

// Membuat koneksi ke database
$conn = mysqli_connect($host, $username, $password, $dbname);

// Mengecek apakah koneksi berhasil
if (!$conn) {
    die("Koneksi gagal: " . mysqli_connect_error());
}

// Menyimpan data dari form ke dalam variabel
$nama_lengkap = $_POST["nama"];
$nomor_identitas = $_POST["identitas"];
$no_hp = $_POST["hp"];
$tempat_wisata = $_POST["wisata"];
$tanggal_kunjungan = $_POST["tanggal"];
$pengunjung_dewasa = $_POST["dewasa"];
$pengunjung_anak = $_POST["anak"];
$harga_tiket = $_POST["harga"];
$total_bayar = $_POST["total"];

// Menyimpan data ke dalam tabel pesan_tiket
$sql = "INSERT INTO pesan_tiket (nama_lengkap, nomor_identitas, no_hp, tempat_wisata, tanggal_kunjungan, pengunjung_dewasa, pengunjung_anak, harga_tiket, total_bayar)
        VALUES ('$nama_lengkap', '$nomor_identitas', '$no_hp', '$tempat_wisata', '$tanggal_kunjungan', '$pengunjung_dewasa', '$pengunjung_anak', '$harga_tiket', '$total_bayar')";

if (mysqli_query($conn, $sql)) {
    displayData();
    echo "<b>Data berhasil disimpan ke dalam tabel pesan_tiket</b>";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
function displayData()
{
    echo "<div class='container'>";
    echo "<div class='row'>";
    echo "<div class='col-md-6'>";
    echo "<p class='mb-0'>Nama lengkap :</p>";
    echo "<p class='font-weight-bold'>" . $_POST["nama"] . "</p>";
    echo "<p class='mb-0'>Nomor identitas :</p>";
    echo "<p class='font-weight-bold'>" . $_POST["identitas"] . "</p>";
    echo "<p class='mb-0'>No hp :</p>";
    echo "<p class='font-weight-bold'>" . $_POST["hp"] . "</p>";
    echo "<p class='mb-0'>Tempat wisata :</p>";
    echo "<p class='font-weight-bold'>" . $_POST["wisata"] . "</p>";
    echo "<p class='mb-0'>Tanggal kunjungan :</p>";
    echo "<p class='font-weight-bold'>" . $_POST["tanggal"] . "</p>";
    echo "</div>";
    echo "<div class='col-md-6'>";
    echo "<p class='mb-0'>Pengunjung dewasa :</p>";
    echo "<p class='font-weight-bold'>" . $_POST["dewasa"] . "</p>";
    echo "<p class='mb-0'>Pengunjung anak :</p>";
    echo "<p class='font-weight-bold'>" . $_POST["anak"] . "</p>";
    echo "<p class='mb-0'>Harga tiket :</p>";
    echo "<p class='font-weight-bold'>Rp. " . $_POST["harga"] . "</p>";
    echo "<p class='mb-0'>Total bayar :</p>";
    echo "<p class='font-weight-bold'>Rp. " . $_POST["total"] . "</p>";
    echo "</div>";
    echo "</div>";
    echo "</div>";
}
// Menutup koneksi
mysqli_close($conn);
?>
</body>
</html>