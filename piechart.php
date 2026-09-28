<?php
include 'connect.php';

$query="
SELECT produk.nama_produk, SUM(detail_pesanan.jumlah) as total
FROM detail_pesanan
JOIN produk ON detail_pesanan.no_produk = produk.no_produk
GROUP BY detail_pesanan.no_produk
";

$result=$conn->query($query);

$data=[];

while($row=$result->fetch_assoc()){
$data[]=$row;
}

echo json_encode($data);
?>