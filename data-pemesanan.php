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
// Koneksi ke database
$servername = "localhost";
$username = "sipuwebi_test"; // username database
$password = "o0z98EI@;*ZB"; // password database
$dbname = "sipuwebi_test"; // nama database

$conn = mysqli_connect($servername, $username, $password, $dbname);

// Cek koneksi
if (!$conn) {
  die("Koneksi gagal: " . mysqli_connect_error());
}

// Query untuk mengambil data dari tabel pesan_tiket
$sql = "SELECT * FROM pesan_tiket";
$result = mysqli_query($conn, $sql);

// Jika data ada, tampilkan dalam tabel Bootstrap
if (mysqli_num_rows($result) > 0) {
  echo '<table class="table table-striped">';
  echo '<thead>';
  echo '<tr>';
  echo '<th>Nama Lengkap</th>';
  echo '<th>Nomor Identitas</th>';
  echo '<th>No. HP</th>';
  echo '<th>Tempat Wisata</th>';
  echo '<th>Tanggal Kunjungan</th>';
  echo '<th>Pengunjung Dewasa</th>';
  echo '<th>Pengunjung Anak-Anak</th>';
  echo '<th>Harga Tiket</th>';
  echo '<th>Total Bayar</th>';
  echo '</tr>';
  echo '</thead>';
  echo '<tbody>';

  // Tampilkan data dalam tabel
  while($row = mysqli_fetch_assoc($result)) {
    echo '<tr>';
    echo '<td>'.$row["nama_lengkap"].'</td>';
    echo '<td>'.$row["nomor_identitas"].'</td>';
    echo '<td>'.$row["no_hp"].'</td>';
    echo '<td>'.$row["tempat_wisata"].'</td>';
    echo '<td>'.$row["tanggal_kunjungan"].'</td>';
    echo '<td>'.$row["pengunjung_dewasa"].'</td>';
    echo '<td>'.$row["pengunjung_anak"].'</td>';
    echo '<td>'.$row["harga_tiket"].'</td>';
    echo '<td>'.$row["total_bayar"].'</td>';
    echo '</tr>';
  }

  echo '</tbody>';
  echo '</table>';
} else {
  echo "Tidak ada data";
}

// Tutup koneksi
mysqli_close($conn);
?>
</body>
</html>