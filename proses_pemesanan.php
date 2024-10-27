<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $jumlah_tiket_dewasa = $_POST['jumlah_tiket_dewasa'];
    $jumlah_tiket_anak = $_POST['jumlah_tiket_anak'];
    $tanggal_pemesanan = $_POST['tanggal_pemesanan'];

    // Harga tiket
    $harga_dewasa = 50000;
    $harga_anak = 30000;

    // Menghitung total harga
    $total_harga_dewasa = $harga_dewasa * $jumlah_tiket_dewasa;
    $total_harga_anak = $harga_anak * $jumlah_tiket_anak;
    $total_harga = $total_harga_dewasa + $total_harga_anak;

    // Menentukan hari pemesanan
    $date = new DateTime($tanggal_pemesanan);
    $formatter = new IntlDateFormatter('id_ID', IntlDateFormatter::FULL, IntlDateFormatter::NONE);
    $hari = $formatter->format($date);

    // Tambahan biaya akhir pekan
    if ($hari == 'Sabtu' || $hari == 'Minggu') {
        $total_harga += 10000 * ($jumlah_tiket_dewasa + $jumlah_tiket_anak);
    }

    // Diskon jika total harga melebihi Rp150.000
    if ($total_harga > 150000) {
        $total_harga *= 0.9; 
    }

    // Menampilkan hasil
    echo "<h1>Detail Pemesanan Tiket</h1>";
    echo "<p>Total Tiket Dewasa: " . $jumlah_tiket_dewasa ." * " . $harga_dewasa . "= " . $total_harga_dewasa."</p>";
    echo "<p>Total Tiket Anak: " . $jumlah_tiket_anak ." * " . $harga_anak . "= " . $total_harga_anak ."</p>";
    echo "<p>Tanggal Pemesanan: " .  " $hari</p>";
    echo "<p>Total Harga: Rp" . number_format($total_harga, 0, ',', '.') . "</p>";
} else {
    echo "Tidak ada data yang dikirim.";
}
?>