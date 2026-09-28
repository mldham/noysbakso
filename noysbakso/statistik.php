<?php
include 'connect.php';

$data=[];

$q1=$conn->query("SELECT COUNT(*) as total FROM pemesanan");
$data['total_pesanan']=$q1->fetch_assoc()['total'];

$q2=$conn->query("SELECT SUM(total_bayar) as total FROM pemesanan");
$data['total_pendapatan']=$q2->fetch_assoc()['total'];

echo json_encode($data);
?>