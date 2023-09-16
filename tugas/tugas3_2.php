<?php 
$SaldoAwal = 150000;
$bunga = 12.5;

$SaldoAkhir = ($SaldoAwal+($SaldoAwal*$bunga/100));

echo"Tabungan Awal = Rp $SaldoAwal <br>";
echo"Bunga Setahun = $bunga % <br>";
echo"Total Tabungan Setahun = Rp.$SaldoAkhir";
?>