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
    echo "Nama_lengkap : ".$_POST["nama"]."</br>";
    echo "Nomor_identitas : ".$_POST["identitas"]."</br>";
    echo "No_hp : ".$_POST["hp"]."</br>";
    echo "Tempat_wisata : ".$_POST["wisata"]."</br>";
    echo "Tanggal_kunjungan : ".$_POST["tanggal"]."</br>";
    echo "Pengunjung_dewasa : ".$_POST["dewasa"]."</br>";
    echo "Pengunjung_anak : ".$_POST["anak"]."</br>";
    echo "Harga_tiket : ".$_POST["harga"]."</br>";
    echo "Total_bayar : ".$_POST["total"]."</br>";


    echo "<b>Data berhasil disimpan ke dalam tabel pesan_tiket</b>";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

// Menutup koneksi
mysqli_close($conn);
?>
