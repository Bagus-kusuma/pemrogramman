<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Hasil Pengisian Formulir</title>
</head>
<body>
    <div class="container mt-5 mb-5">
        <div class="row justify-content-center">
            <div class="col-5">
                <?php
                if ($_SERVER["REQUEST_METHOD"] == "POST") {
                    // Tangkap data dari formulir
                    $nama = $_POST["nama"];
                    $lahir = $_POST["lahir"];
                    $alamat = $_POST["alamat"];
                    $agama = $_POST["agama"];
                    $univ = $_POST["univ"];
                    $fakultas = $_POST["fakultas"];
                    $prodi = $_POST["prodi"];
                    $nim = $_POST["nim"];

                    // Tampilkan hasil pengisian formulir
                    echo "<h2>Hasil Pengisian Formulir:</h2>";
                    echo "<p>Nama Lengkap: " . $nama . "</p>";
                    echo "<p>Tanggal Lahir: " . $lahir . "</p>";
                    echo "<p>Alamat: " . $alamat . "</p>";
                    echo "<p>Agama: " . $agama . "</p>";
                    echo "<p>Universitas: " . $univ . "</p>";
                    echo "<p>Fakultas: " . $fakultas . "</p>";
                    echo "<p>Program Studi: " . $prodi . "</p>";
                    echo "<p>NIM: " . $nim . "</p>";
                } else {
                    echo "<h2>Formulir belum diisi atau data tidak diterima.</h2>";
                }
                ?>
            </div>
        </div>
    </div>
</body>
</html>
