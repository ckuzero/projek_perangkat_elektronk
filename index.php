
<?php

session_start();

// Memanggil kelas turunan
require_once __DIR__ . "/classes/PonselPintar.php";

// Mengambil status perangkat
$statusAwal = $_SESSION["statusPerangkat"] ?? "Mati";

// Membuat objek ponsel pintar
$ponsel = new PonselPintar(
    "Ponsel Galaxy",
    "Samsung",
    4500000,
    "Hitam",
    "8 GB",
    "256 GB",
    "6,7 Inci",
    "5000 mAh",
    "Android"
);

// Mengatur status awal objek
if ($statusAwal == "Hidup") {
    $ponsel->nyalakan();
}

// Menyiapkan pesan
$pesan = "";

// Memproses tombol aplikasi
if (isset($_GET["aksi"])) {

    switch ($_GET["aksi"]) {

        case "nyalakan":
            $pesan = $ponsel->nyalakan();
            break;

        case "matikan":
            $pesan = $ponsel->matikan();
            break;

        case "panggilan":
            $pesan = $ponsel->melakukanPanggilan();
            break;

        case "pesan":
            $pesan = $ponsel->mengirimPesan();
            break;

        case "aplikasi":
            $pesan = $ponsel->membukaAplikasi();
            break;

        case "daya":
            $pesan = $ponsel->mengisiDaya();
            break;
    }

    // Menyimpan status perangkat
    $_SESSION["statusPerangkat"] = $ponsel->periksaStatus();
}

// Mengambil informasi perangkat
$informasi = $ponsel->tampilkanInformasi();

// Mengambil spesifikasi perangkat
$spesifikasi = $ponsel->tampilkanSpesifikasi();

?>

<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Sistem Manajemen Perangkat Elektronik</title>

    <style>

        body {
            font-family: Arial, sans-serif;
            background: #eef2f7;
            margin: 0;
            padding: 30px;
        }

        .wadah {
            max-width: 750px;
            margin: auto;
            background: white;
            padding: 25px;
            border-radius: 12px;
            box-shadow: 0 3px 12px #0002;
        }

        h1, h2 {
            text-align: center;
            color: #1e3a8a;
        }

        .informasi {
            padding: 15px;
            background: #f1f5f9;
            border-radius: 8px;
            margin-bottom: 20px;
        }

        .tombol {
            display: inline-block;
            padding: 10px 14px;
            margin: 5px;
            background: #2563eb;
            color: white;
            text-decoration: none;
            border-radius: 6px;
        }

        .tombol:hover {
            background: #1e40af;
        }

        .pesan {
            background: #dcfce7;
            padding: 12px;
            border-radius: 6px;
            color: #166534;
            margin: 15px 0;
        }

        .status {
            font-weight: bold;
            color: green;
        }

        footer {
            text-align: center;
            margin-top: 25px;
            color: gray;
        }

    </style>

</head>

<body>

<div class="wadah">

    <h1>Sistem Manajemen Perangkat Elektronik</h1>

    <h2>Informasi Ponsel Pintar</h2>

    <div class="informasi">

        <?php foreach ($informasi as $nama => $nilai): ?>

            <p>
                <strong><?= htmlspecialchars($nama) ?>:</strong>

                <?php if ($nama == "Harga"): ?>
                    Rp <?= number_format($nilai, 0, ",", ".") ?>
                <?php else: ?>
                    <?= htmlspecialchars($nilai) ?>
                <?php endif; ?>

            </p>

        <?php endforeach; ?>

    </div>

    <h2>Spesifikasi Ponsel Pintar</h2>

    <div class="informasi">

        <?php foreach ($spesifikasi as $nama => $nilai): ?>

            <p>
                <strong><?= htmlspecialchars($nama) ?>:</strong>
                <?= htmlspecialchars($nilai) ?>
            </p>

        <?php endforeach; ?>

    </div>

    <h2>Pengaturan Perangkat</h2>

    <div style="text-align:center;">

        <a class="tombol" href="?aksi=nyalakan">
            Nyalakan
        </a>

        <a class="tombol" href="?aksi=matikan">
            Matikan
        </a>

        <a class="tombol" href="?Aaksi=panggilan">
            Melakukan Panggilan
        </a>

        <a class="tombol" href="?aksi=pesan">
            Mengirim Pesan
        </a>

        <a class="tombol" href="?aksi=aplikasi">
            Membuka Aplikasi
        </a>

        <a class="tombol" href="?aksi=daya">
            Mengisi Daya
        </a>

    </div>

    <?php if ($pesan != ""): ?>

        <div class="pesan">
            <?= htmlspecialchars($pesan) ?>
        </div>

    <?php endif; ?>

    <footer>
        <p>Project Ujian Tengah Semester</p>
        <p>Pemrograman Berorientasi Objek</p>
    </footer>

</div>

</body>
</html>
