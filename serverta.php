<!DOCTYPE html>
<head>
<title>DATA KENDARAAN</title>
<link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>
<header>
    <h2 class="suma">Data Kendaraan Anda</h2>
</header>
<h4 class="amin">
<?php
include("userServiceta.php");

#Function/Method
$user = new userServiceta($_POST['merk'], $_POST['nomor'], $_POST['nama']);
#pengkondisian
if($get_user = $user->login()) {
    $user->setnama($_POST['nama']);
    $panggil = $_POST['panggil'];
    if ($panggil == 'Bapak')
        {
        $hasil = $panggil; 
        }
        else 
        {
        $hasil = $panggil;
        }       
    echo 'Selamat Datang '.$panggil;
    echo ' ' .$user->getnama();
    echo ' !';
    echo '<br><br>Merk kendaraan : '.$get_user;
    echo '<br><br>Tahun Pembuatan : '.$user->getTahun();
    echo '<br><br>Nomor Rangka : ' .$user->getRangka();
    echo '<br><br>Warna : '.$user->getWarna();
    echo '<br><br>Nama Pemilik : '.$user->getPemilik();
    echo '<br><br>Pajak berlaku sampai : '.$user->getPajak();
} else {
    echo 'Invalid Login';
}
?>
</h4>
</body>
</html>
