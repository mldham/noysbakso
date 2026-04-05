<?php
include "connect.php";
?>

<!DOCTYPE html>
<html>

<head>

<title>Penjualan</title>

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">

<style>

body{
display:flex;
background:#f4f6f9;
margin:0;
font-family:Arial;
}

/* SIDEBAR */

.sidebar{
width:220px;
background:#2c3e50;
min-height:100vh;
color:white;
padding-top:20px;
position:fixed;
}

.sidebar h2{
text-align:center;
margin-bottom:30px;
}

.sidebar a{
display:block;
color:white;
padding:15px;
text-decoration:none;
}

.sidebar a:hover{
background:#34495e;
}

/* CONTENT */

.content{
margin-left:220px;
padding:30px;
width:100%;
}

.card{
border-radius:10px;
box-shadow:0 3px 10px rgba(0,0,0,0.05);
}

</style>

</head>

<body>


<div class="sidebar">

<h2>Admin Panel</h2>

<a href="admin.html">Dashboard</a>
<a href="produk.php">Produk</a>
<a href="pesanan.php">Pesanan</a>
<a href="penjualan.php">Penjualan</a>

</div>


<div class="content">

<div class="card p-4">

<h3 class="mb-4">Data Penjualan</h3>

<table class="table table-bordered">

<thead class="thead-light">

<tr>
<th>Produk</th>
<th>Total Terjual</th>
</tr>

</thead>

<tbody>

<?php

$q = mysqli_query($conn,"
SELECT 
produk.nama_produk,
SUM(detail_pesanan.jumlah) AS total_terjual
FROM detail_pesanan
JOIN produk ON detail_pesanan.no_produk = produk.no_produk
GROUP BY detail_pesanan.no_produk
");

while($d = mysqli_fetch_array($q)){
?>

<tr>

<td><?php echo $d['nama_produk']; ?></td>
<td><?php echo $d['total_terjual']; ?></td>

</tr>

<?php } ?>

</tbody>

</table>

</div>

</div>

</body>
</html>