<?php

$makanan = ["Nasi Goreng", "Mie Ayam", "Sate Ayam", "Bakso"];
$harga = [15000, 12000, 20000, 18000];

echo "Data Makanan dan Harganya:<br>";
// perulangan for loop
for ($i = 0; $i < count($makanan); $i++) {
    echo "Makanan: " . $makanan[$i] . ", Harga: Rp" . number_format($harga[$i], 0, ',', '.') . "<br>";
}

echo "<br>Menggunakan while loop:<br>";
$i = 0;
// perulangan while loop
while ($i < count($makanan)) {
    echo "Makanan: " . $makanan[$i] . ", Harga: Rp" . number_format($harga[$i], 0, ',', '.') . "<br>";
    $i++;
}
?>
