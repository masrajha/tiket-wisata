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
<nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Wisata Lampung</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="index.html#">Beranda</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="index.html#destinasi-section">Destinasi</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="index.html#harga-tiket">Paket Wisata</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="index.html#pesan-tiket">Kontak</a>
                    </li>
                </ul>
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="#">Login</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
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
    $durasi = $_POST["durasi"];
    $pengunjung_dewasa = $_POST["dewasa"];
    $pengunjung_anak = $_POST["anak"];
    $harga_tiket = $_POST["harga"];
    $total_bayar = $_POST["total"];

    // Menyimpan data ke dalam tabel pesan_tiket
    $sql = "INSERT INTO pesan_tiket (nama_lengkap, nomor_identitas, no_hp, tempat_wisata, tanggal_kunjungan, durasi, pengunjung_dewasa, pengunjung_anak, harga_tiket, total_bayar)
        VALUES ('$nama_lengkap', '$nomor_identitas', '$no_hp', '$tempat_wisata', '$tanggal_kunjungan', '$durasi','$pengunjung_dewasa', '$pengunjung_anak', '$harga_tiket', '$total_bayar')";

    if (mysqli_query($conn, $sql)) {
        displayData();
        echo "<b>Data berhasil disimpan ke dalam tabel <a href='data-pemesanan.php'> pesan_tiket</a></b>";
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
    function displayData()
    {
        echo "<table class='table table-striped'>";
        echo "<tr><th>Nama lengkap</th><td>" . $_POST["nama"] . "</td></tr>";
        echo "<tr><th>Nomor identitas</th><td>" . $_POST["identitas"] . "</td></tr>";
        echo "<tr><th>No hp</th><td>" . $_POST["hp"] . "</td></tr>";
        echo "<tr><th>Tempat wisata</th><td>" . $_POST["wisata"] . "</td></tr>";
        echo "<tr><th>Tanggal kunjungan</th><td>" . $_POST["tanggal"] . "</td></tr>";
        echo "<tr><th>Durasi</th><td>" . $_POST["durasi"] . "</td></tr>";
        echo "<tr><th>Pengunjung dewasa</th><td>" . $_POST["dewasa"] . "</td></tr>";
        echo "<tr><th>Pengunjung anak-anak</th><td>" . $_POST["anak"] . "</td></tr>";
        echo "<tr><th>Harga tiket</th><td>" . $_POST["harga"] . "</td></tr>";
        echo "<tr><th>Total bayar</th><td>" . $_POST["total"] . "</td></tr>";
        echo "</table>";
    }
    // Menutup koneksi
    mysqli_close($conn);
    ?>
</body>

</html>