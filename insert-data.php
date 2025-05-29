<?php
include 'koneksi.php'; // Include koneksi database
echo "<pre>";
print_r($_POST);
echo "</pre>";


$node_id  = $_REQUEST['node_id'];
// $node_id  = 1;

$PZEM1_V = $_POST['voltage1'];
$PZEM1_A = $_POST['current1'];
$PZEM1_E = $_POST['energy1'];
$PZEM1_P = $_POST['power1'];

$PZEM2_V = $_POST['voltage2'];
$PZEM2_A = $_POST['current2'];
$PZEM2_E = $_POST['energy2'];
$PZEM2_P = $_POST['power2'];

$PZEM3_V = $_POST['voltage3'];
$PZEM3_A = $_POST['current3'];
$PZEM3_E = $_POST['energy3'];
$PZEM3_P = $_POST['power3'];

$RELAY = $_POST['status'];

$table_name = "node".($node_id);
echo "Tabel: $table_name<br>";
echo "Tabel: $node_id<br>";
// Simpan data ke tabel
$query_insert = "
INSERT INTO $table_name (
    PZEM1_V, PZEM1_A, PZEM1_E, PZEM1_P,
    PZEM2_V, PZEM2_A, PZEM2_E, PZEM2_P,
    PZEM3_V, PZEM3_A, PZEM3_E, PZEM3_P,
    RELAY
) VALUES (
    '$PZEM1_V', '$PZEM1_A', '$PZEM1_E', '$PZEM1_P',
    '$PZEM2_V', '$PZEM2_A', '$PZEM2_E', '$PZEM2_P',
    '$PZEM3_V', '$PZEM3_A', '$PZEM3_E', '$PZEM3_P',
    '$RELAY'
)";

if (mysqli_query($conn, $query_insert)) {
    echo "Data node $node_id berhasil disimpan ke tabel $table_name.";
} else {
    echo "Gagal menyimpan data: " . mysqli_error($conn);
}

mysqli_close($conn);
?>
