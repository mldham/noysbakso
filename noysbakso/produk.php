<?php 
include "connect.php";

/* UPDATE STOK */
if(isset($_POST['update'])){
    $id = $_POST['id'];
    $stok = $_POST['stok'];

    mysqli_query($conn,"UPDATE produk SET stok='$stok' WHERE no_produk='$id'");
    header("Location: produk.php");
}
?>

<link rel="stylesheet" href="admin.css">

<style>
    @import url('https://fonts.googleapis.com/css2?family=Ubuntu:wght@300&display=swap');

body{
display:flex;
background:#f4f6f9;
font-family: 'Ubuntu', sans-serif;
margin:0;
}

/* CONTENT */
.content{
    margin-left:220px;
    padding:30px;
}

h2{
    margin-bottom:20px;
}

/* TABLE */

table{
    width:100%;
    border-collapse:collapse;
    background:white;
    border-radius:8px;
    overflow:hidden;
    box-shadow:0 3px 10px rgba(0,0,0,0.05);
}

th{
    background:#f8f9fa;
    padding:12px;
    text-align:left;
    border-bottom:2px solid #eee;
}

td{
    padding:12px;
    border-bottom:1px solid #f1f1f1;
}

tr:hover{
    background:#fafafa;
}

/* PRICE */
.price{
    color:#2e7d32;
    font-weight:bold;
}

/* INPUT */
input[type=number]{
    width:60px;
    padding:5px;
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

/* BUTTON */

button{
    padding:6px 12px;
    border:none;
    background:#2196f3;
    color:white;
    border-radius:4px;
    cursor:pointer;
}

button:hover{
    background:#1976d2;
}

</style>


<!-- SIDEBAR -->

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

<h2>Manajemen Produk</h2>

<table>

<tr>
<th>Nama Produk</th>
<th>Harga</th>
<th>Stok</th>
<th>Aksi</th>
</tr>

<?php

$q = mysqli_query($conn,"SELECT * FROM produk");

while($d = mysqli_fetch_array($q)){

/* Menghilangkan Rp jika ada */
$harga = preg_replace('/[^0-9]/','',$d['harga']);

?>

<tr>

<td><?php echo $d['nama_produk']; ?></td>

<td class="price">
Rp <?php echo number_format($harga); ?>
</td>

<td>

<form method="POST">

<input type="hidden" name="id" value="<?php echo $d['no_produk']; ?>">

<input type="number" name="stok" value="<?php echo $d['stok']; ?>">

</td>

<td>

<button type="submit" name="update">Update</button>

</form>

</td>

</tr>

<?php } ?>

</table>

</div>