
<?php

// Memanggil kelas induk
require_once __DIR__ . "/PerangkatElektronik.php";

// Membuat kelas turunan
class PonselPintar extends PerangkatElektronik
{
    // 5 atribut khusus ponsel pintar
    private $kapasitasRAM;
    private $kapasitasPenyimpanan;
    private $ukuranLayar;
    private $kapasitasBaterai;
    private $sistemOperasi;

    // Fungsi untuk membuat objek ponsel pintar
    public function __construct(
        $namaPerangkat,
        $merekPerangkat,
        $hargaPerangkat,
        $warnaPerangkat,
        $kapasitasRAM,
        $kapasitasPenyimpanan,
        $ukuranLayar,
        $kapasitasBaterai,
        $sistemOperasi
    ) {
        // Memanggil fungsi kelas induk
        parent::__construct(
            $namaPerangkat,
            $merekPerangkat,
            $hargaPerangkat,
            $warnaPerangkat
        );

        // Mengisi atribut ponsel pintar
        $this->kapasitasRAM = $kapasitasRAM;
        $this->kapasitasPenyimpanan = $kapasitasPenyimpanan;
        $this->ukuranLayar = $ukuranLayar;
        $this->kapasitasBaterai = $kapasitasBaterai;
        $this->sistemOperasi = $sistemOperasi;
    }

    // Fungsi melakukan panggilan
    public function melakukanPanggilan()
    {
        return "Ponsel pintar sedang melakukan panggilan.";
    }

    // Fungsi mengirim pesan
    public function mengirimPesan()
    {
        return "Pesan berhasil dikirim.";
    }

    // Fungsi membuka aplikasi
    public function membukaAplikasi()
    {
        return "Aplikasi berhasil dibuka.";
    }

    // Fungsi mengisi daya baterai
    public function mengisiDaya()
    {
        return "Ponsel pintar sedang mengisi daya.";
    }

    // Fungsi menampilkan spesifikasi
    public function tampilkanSpesifikasi()
    {
        return [
            "Kapasitas RAM" => $this->kapasitasRAM,
            "Kapasitas Penyimpanan" => $this->kapasitasPenyimpanan,
            "Ukuran Layar" => $this->ukuranLayar,
            "Kapasitas Baterai" => $this->kapasitasBaterai,
            "Sistem Operasi" => $this->sistemOperasi
        ];
    }
}
