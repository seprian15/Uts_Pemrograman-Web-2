<?php
// Data barang dalam bentuk array multidimensi
$barang = array(
    array("Nama Produk" => "Pepsodent", "Stok" => 20, "Harga" => 10000),
    array("Nama Produk" => "Sunlight", "Stok" => 15, "Harga" => 11000),
    array("Nama Produk" => "Baygon", "Stok" => 10, "Harga" => 16000),
    array("Nama Produk" => "Dove", "Stok" => 18, "Harga" => 22000),
    array("Nama Produk" => "Rinso", "Stok" => 15, "Harga" => 20000),
    array("Nama Produk" => "Downy", "Stok" => 20, "Harga" => 11500),
    array("Nama Produk" => "Le Minera;", "Stok" => 25, "Harga" => 5000),

);

function hitungTotalJumlah($barang) {
    $totalJumlah = 0;
    foreach ($barang as $item) {
        $totalJumlah += $item['Stok'] * $item['Harga'];
    }
    return $totalJumlah;
}

$totalJumlah = hitungTotalJumlah($barang);

$diskon = 0;
if ($totalJumlah >= 100000) {
    $diskon = 0.2; // 20%
} elseif ($totalJumlah >= 50000) {
    $diskon = 0.1; // 10%
}

$totalBayar = $totalJumlah - ($totalJumlah * $diskon);

echo "Tanggal Transaksi: 07 November 2023<br>";
echo "<table border='1'>";
echo "<tr><th>Nama Produk</th><th>Stok</th><th>Harga</th></tr>";

usort($barang, function($a, $b) {
    return strcmp($a['Nama Produk'], $b['Nama Produk']);
});

foreach ($barang as $item) {
    echo "<tr>";
    echo "<td>" . $item['Nama Produk'] . "</td>";
    echo "<td>" . $item['Stok'] . "</td>";
    echo "<td>" . $item['Harga'] . "</td>";
    echo "</tr>";
}
echo "</table>";

echo "a. Total Jumlah: " . $totalJumlah . " Rupiah<br>";
echo "b. Diskon: " . ($diskon * 100) . "%<br>";
echo "c. Total Pembayaran: " . $totalBayar . " Rupiah";
?>