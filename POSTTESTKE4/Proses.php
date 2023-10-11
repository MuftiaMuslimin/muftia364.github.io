<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nama_barang = $_POST["nama"];
    $jenis_bahan = $_POST["jenis"];
    $harga_barang = $_POST["harga"];

    echo "<h2>Data barang yang telah Diinput:</h2>";
    echo "Nama Barang: " . $nama_barang . "<br>";
    echo "Jenis Bahan: " . $jenis_bahan . "<br>";
    echo "Harga Barang: " . $harga_barang . "<br>";
}
?>