<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>***** BUKTI PENDAFTARAN *****</title>

    <!-- Link Google Font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600&display=swap" rel="stylesheet">

    <!-- CSS Stylesheet -->
    <link rel="stylesheet" href="style3.css">
</head>

<body>
    <div class="content">
        <center>
            <h1>PERPUSTAKAAN "PINTAR MEMBACA"</h1>
            <h3>Pendaftaran Anggota Secara Online</h3>
            <h5><i>Jl. Sejahtera no.11 Bekasi Tenggara</i></h5>
            <hr>
        </center>

        <div class="bukti-container">
            <h2>***** BUKTI PENDAFTARAN *****</h2>

            <div class="bukti-detail">
                <?php
                $nama = $_POST['nama'];
                $tempat = $_POST['tempatlahir'];
                $tgl = $_POST['tanggallahir'];
                $bln = $_POST['bulan'];
                $thn = $_POST['tahunlahir'];
                $jenis = $_POST['jk'];
                $alamat = $_POST['alamat'];
                $telp = $_POST['telp'];

                echo "<p><strong>Tanggal Cetak:</strong> " . date("D, d M Y") . "</p>";
                echo "<p><strong>Nama Lengkap:</strong> $nama</p>";
                echo "<p><strong>TTL:</strong> $tempat, $tgl / $bln / $thn</p>";

                $jk = ($jenis == 'l') ? 'Laki-laki' : 'Perempuan';
                echo "<p><strong>Jenis Kelamin:</strong> $jk</p>";
                echo "<p><strong>Alamat:</strong> $alamat</p>";
                echo "<p><strong>No. Telp:</strong> $telp</p>";
                ?>
            </div>
        </div>

        <center>
            <a href="daftar.php" class="button"><<< INPUT LAGI</a>
        </center>

        <hr>

        <marquee direction="right">
            <i>- Pendaftaran Anggota Perpustakaan secara Online -</i>
        </marquee>
    </div>
</body>

</html>
