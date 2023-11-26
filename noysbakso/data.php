<?php
include 'connect.php';

session_start();

$sql = "SELECT pesanan_id, no_user, alamat, pengiriman, payment, total_bayar FROM pemesanan";
$result = $conn->query($sql);



?>


<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="style.css">
  <title>Document</title>
</head>

<body>
  <header>
    <nav class="menu">
      <img src="img/bakso.png" alt="" width="80">
      <label><span style="color: #ffb700;">NOY'S</span> BAKSO</label>
      <ul>
        <li><a href="index.html">home</a></li>
        <li><a href="data.php">Information</a></li>
        <li><a href="https://wa.me/+6281217981811" target="_blank">contact us</a></li>
        <li><a href="about.html">about us</a></li>
        <div class="butout">
          <button><img src="img/profile.png" alt=""><a href="logout.php">Log Out</a></button>
        </div>
      </ul>
    </nav>
  </header>

  <div class="data">
    <center>
      <h1>DATA PENJUALAN</h1>
    </center>
    <table cellspacing='0'>
      <thead>
        <tr>
          <th>pesanan id</th>
          <th>no user</th>
          <th>alamat</th>
          <th>pengiriman</th>
          <th>payment</th>
          <th>total bayar</th>
        </tr>
      </thead>
      <tbody>
        <?php

        if ($result->num_rows > 0) {
          while ($row = $result->fetch_assoc()) {
            echo "<tr>";
            echo "<td>" . $row["pesanan_id"] . "</td>";
            echo "<td>" . $row["no_user"] . "</td>";
            echo "<td>" . $row["alamat"] . "</td>";
            echo "<td>" . $row["pengiriman"] . "</td>";
            echo "<td>" . $row["payment"] . "</td>";
            echo "<td>" . $row["total_bayar"] . "</td>";
            echo "</tr>";
          }
        } else {
          echo "<tr><td colspan='3'>Tidak ada data</td></tr>";
        }
        ?>
      </tbody>
    </table>
  </div>

  <footer>
    <div class="footer">
      <div class="imgbakso">
        <img src="img/bakso.png" alt="" width="120">
      </div>
      <h2>NOY'S BAKSO</h2>
      <div class="footer-content">
        <div class="location">
          <p class="wa"><a href="https://wa.me/+6281217981811" target="_blank"><img src="img/wa.png" alt=""
                width="22">+6281217981811
          </p></a>
          <p class="instagram"><a href="#" target="_blank"><img src="img/instagramicon.png" alt="" width="22">@NoyzBakso
          </p></a>
          <p class="map"><a href="#" target="_blank"><img src="img/map.png" alt="" width="18">Depan Angga's Haircut,Ds
              Ringinpitu</p></a>
        </div>
        <h4>Available at</h4>
        <div class="logo">
          <p class="shopee"><a href="#" target="_blank"><img src="img/shopeehp.png" alt="" width="30"></p></a>
          <p class="gojek"><a href="#" target="_blank"><img src="img/gojek.png" alt="" width="45"></p></a>
          <p class="grab"><a href="#" target="_blank"><img src="img/grab.png" alt="" width="60"></p></a>
        </div>
      </div>
    </div>
  </footer>

</body>

</html>