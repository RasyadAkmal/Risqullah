<!DOCTYPE html>
<html lang="en">
<head>
<title>INDRA</title>
<style>
   img {
     width: 300px;
     height: 150px;
   }
</style>
<link rel="stylesheet" type="text/css" href="style.css">
</head>

<body class="badan">
<header>
    <h2 class="judul">INDRA</h2>
    <p class="deskripsi">Info Kendaraan</p>
    <img src="mobile.png">
</header>
<form class="jawa" action="./serverta.php" method="POST">
<h3 class="kalem">DATA KENDARAAN</h3>
<br>
<label>Masukkan Merk Kendaraan</label><br><br>
<input type="merk" name="merk" placeholder="merk">
<br><br>
<label>Masukkan Nomor Kendaraan</label><br><br>
<input type="nomor" name="nomor" placeholder="nomor">
<br><br>
<label>Nama Anda</label><br><br>
<Select class="awas" name="panggil" id="panggil">
<option value='Bapak'>Bapak</option>
<option value='Ibu'>Ibu</option>
</Select>
<input type="nama" name="nama" placeholder="nama">
<br><br>
<button class="buton" type="submit">Submit</button>
</form>
</body>
</html>