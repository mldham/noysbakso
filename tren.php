<?php
include 'connect.php';

$query="
SELECT YEAR(tanggal_pesanan) as tahun,
SUM(total_bayar) as total
FROM pemesanan
GROUP BY YEAR(tanggal_pesanan)
";

$result=$conn->query($query);

$data=[];

while($row=$result->fetch_assoc()){
$data[]=$row;
}

echo json_encode($data);
?>