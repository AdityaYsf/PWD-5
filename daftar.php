<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>***** FORM INPUT *****</title>
    <link rel="stylesheet" href="style2.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
</head>

<body>
    <div class="form-container">
        <form action="latihan2.php" method="post">
            <center>
                <h1>PERPUSTAKAAN "PINTAR MEMBACA"</h1>
                <h3>Pendaftaran Anggota Secara Online</h3>
                <h5><i>Jl. Sejahtera no.11 Bekasi Tenggara</i></h5>
                <hr color="red">
            </center>

            <div class="form-group">
                <label for="nama">Nama Lengkap:</label>
                <input type="text" id="nama" name="nama" maxlength="30" required>
            </div>

            <div class="form-group">
                <label>TTL:</label>
                <div class="ttl-container">
                    <input type="text" name="tempatlahir" maxlength="20" placeholder="Tempat Lahir" required>
                    <select name="tanggallahir" required>
                        <?php
                        for ($i = 1; $i <= 31; $i++) {
                            echo "<option value='$i'>$i</option>";
                        }
                        ?>
                    </select>
                    <select name="bulan" required>
                        <?php
                        $bulan = ["Januari", "Februari", "Maret", "April", "Mei", "Juni", "Juli", "Agustus", "September", "Oktober", "November", "Desember"];
                        foreach ($bulan as $b) {
                            echo "<option value=\"$b\">$b</option>";
                        }
                        ?>
                    </select>
                    <input type="text" name="tahunlahir" maxlength="4" value="2009" required placeholder="Tahun">
                </div>
            </div>

            <div class="form-group">
                <label>Jenis Kelamin:</label>
                <input type="radio" name="jk" value="l" required> Laki-laki
                <input type="radio" name="jk" value="p"> Perempuan
            </div>

            <div class="form-group">
                <label for="alamat">Alamat:</label>
                <textarea id="alamat" name="alamat" rows="3" cols="35" required></textarea>
            </div>

            <div class="form-group">
                <label for="telp">No. Telp:</label>
                <input type="text" id="telp" name="telp" maxlength="15" required>
            </div>

            <div class="form-actions">
                <input type="submit" value="KIRIM">
                <input type="reset" value="BERSIH">
            </div>
        </form>

        <hr color="red">

        <marquee direction="right">
            <i>- Pendaftaran Anggota Perpustakaan secara Online -</i>
        </marquee>
    </div>
</body>

</html>
