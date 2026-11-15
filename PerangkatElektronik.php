
<?php

class PerangkatElektronik
{
    // Atribut perangkat elektronik
    private $namaPerangkat;
    private $merekPerangkat;
    private $hargaPerangkat;
    private $warnaPerangkat;
    private $statusPerangkat;

    // Fungsi untuk membuat objek
    public function __construct($nama, $merek, $harga, $warna)
    {
        $this->namaPerangkat = $nama;
        $this->merekPerangkat = $merek;
        $this->hargaPerangkat = $harga;
        $this->warnaPerangkat = $warna;
        $this->statusPerangkat = "Mati";
    }

    // Fungsi menyalakan perangkat
    public function nyalakan()
    {
        $this->statusPerangkat = "Hidup";
        return "Perangkat berhasil dinyalakan";
    }

    // Fungsi mematikan perangkat
    public function matikan()
    {
        $this->statusPerangkat = "Mati";
        return "Perangkat berhasil dimatikan";
    }

    // Fungsi memeriksa status
    public function periksaStatus()
    {
        return $this->statusPerangkat;
    }

    // Fungsi menampilkan informasi
    public function tampilkanInformasi()
    {
        return [
            "Nama Perangkat" => $this->namaPerangkat,
            "Merek" => $this->merekPerangkat,
            "Harga" => $this->hargaPerangkat,
            "Warna" => $this->warnaPerangkat,
            "Status" => $this->statusPerangkat
        ];
    }
}
