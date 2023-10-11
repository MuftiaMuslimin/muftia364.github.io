<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nama_barang = $_POST["nama"];
    $jenis_bahan = $_POST["harga"];
    $harga_barang = $_POST["password"];

    // Di sini Anda dapat melakukan apa yang Anda inginkan dengan data yang dikirim dari formulir
    // Misalnya, menyimpannya dalam database atau menampilkan pesan

    echo "<h2>Data barang yang Diinput:</h2>";
    echo "Nama Barang: " . $nama_barang . "<br>";
    echo "Jenis Bahan: " . $jenis_bahan . "<br>";

    // Pastikan untuk tidak menampilkan password dalam bentuk teks biasa
    // Sebaiknya Anda memprosesnya dengan aman, misalnya dengan hashing.

    echo "Harga Barang: " . $harga_barang . "<br>";
}
?>