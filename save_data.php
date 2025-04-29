<?php
$servername = "localhost"; // Host database (biasanya localhost)
$username = "root"; // Username MySQL
$password = ""; // Password MySQL (kosong jika default XAMPP)
$dbname = "pa"; // Nama database MySQL

// Buat koneksi ke MySQL
$conn = new mysqli($servername, $username, $password, $dbname);

// Cek koneksi
if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}

// Cek apakah data dikirim oleh ESP32 melalui HTTP POST
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $data = $_POST["data"]; // Ambil data dari ESP32

    // Pisahkan data berdasarkan tanda #
    list($voltage, $current, $energy, $power_factor) = explode("#", $data);

    // Simpan data ke database
    $sql = "INSERT INTO aerator1 (Voltase, Arus, Energi, Pf) 
            VALUES ('$voltage', '$current', '$energy', '$power_factor')";

    if ($conn->query($sql) === TRUE) {
        echo "Data berhasil disimpan"; // Tanggapan untuk ESP32
    } else {
        echo "Error: " . $conn->error;
    }
} else {
    echo "Metode tidak valid!!";
}

$conn->close();
?>
