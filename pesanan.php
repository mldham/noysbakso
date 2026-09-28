<?php
include "connect.php";
?>


<style>

    @import url('https://fonts.googleapis.com/css2?family=Ubuntu:wght@300&display=swap');

body{
display:flex;
background:#f4f6f9;
font-family: 'Ubuntu', sans-serif;
margin:0;
}

.content{
    margin-left:220px;
    padding:30px;
}

/* SIDEBAR */
.sidebar{
width:220px;
background:#2c3e50;
min-height:100vh;
color:white;
position:fixed;
left:0;
top:0;

display:flex;
flex-direction:column;
justify-content:space-between;
}

.sidebar h2{
text-align:center;
margin:20px 0;
}

/* MENU */
.menu a{
display:block;
color:white;
padding:15px;
text-decoration:none;
}

.menu a:hover{
background:#34495e;
}

/* LOGOUT */
.logout{
padding:10px;
}

.logout a{
display:block;
background:#e74c3c;
padding:12px;
text-align:center;
color:white;
text-decoration:none;
border-radius:8px;
}

.logout a:hover{
background:#c0392b;
}

h2{
    margin-bottom:20px;
}

table{
    width:100%;
    border-collapse:collapse;
    background:white;
    border-radius:8px;
    overflow:hidden;
    box-shadow:0 2px 8px rgba(0,0,0,0.05);
}

th{
    text-align:left;
    padding:12px;
    background:#f8f9fa;
    border-bottom:2px solid #eee;
}

td{
    padding:12px;
    border-bottom:1px solid #f0f0f0;
}

tr:hover{
    background:#fafafa;
}

.price{
    color:#2e7d32;
    font-weight:bold;
}

/* LOGOUT */
.logout{
padding:10px;
}

.logout a{
display:block;
background:#e74c3c;
padding:12px;
text-align:center;
color:white;
text-decoration:none;
border-radius:8px;
}

.logout a:hover{
background:#c0392b;
}

</style>

<body>

<div class="sidebar">

    <div>
        <h2>Admin Panel</h2>

        <div class="menu">
            <a href="admin.html">Dashboard</a>
            <a href="produk.php">Produk</a>
            <a href="pesanan.php">Pesanan</a>
            <a href="penjualan.php">Penjualan</a>
        </div>
    </div>

    <!-- LOGOUT -->
    <div class="logout">
        <a href="logout.php">Logout</a>
    </div>

</div>

<div class="content">

<h2>Data Pesanan</h2>

<table>
<tr>
<th>ID</th>
<th>Nama Pembeli</th>
<th>Produk</th>
<th>Harga</th>
<th>Jumlah</th>
<th>Total</th>
<th>Waktu</th>
</tr>

<?php
$q = mysqli_query($conn,"SELECT 
detail_pesanan.pesanan_id,
user_acc.username,
produk.nama_produk,
detail_pesanan.harga,
detail_pesanan.jumlah,
detail_pesanan.total_harga,
pemesanan.tanggal_pesanan
FROM detail_pesanan
JOIN pemesanan ON detail_pesanan.pesanan_id = pemesanan.pesanan_id
JOIN user_acc ON pemesanan.no_user = user_acc.no_user
JOIN produk ON detail_pesanan.no_produk = produk.no_produk
");

while($d = mysqli_fetch_array($q)){
?>

<tr>
<td><?php echo $d['pesanan_id']; ?></td>
<td><?php echo $d['username']; ?></td>
<td><?php echo $d['nama_produk']; ?></td>
<td class="price">Rp <?php echo number_format($d['harga']); ?></td>
<td><?php echo $d['jumlah']; ?></td>
<td class="price">Rp <?php echo number_format($d['total_harga']); ?></td>
<td><?php echo $d['tanggal_pesanan']; ?></td>
</tr>

<?php } ?>

</table>

</div>

</body>