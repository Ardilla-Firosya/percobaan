<?php

$nama = $_POST['nama'];
$npm = $_POST['txtnpm'];
$asal = $_POST['asal'];

$q = "update mha set nama='$nama', asal='$asal' where npm='$npm'";

$con = mysqli_connect('localhost', 'root', '');
if(!$con)
{
    die('gagal konek'.mysqli_error($con));
}

mysqli_select_db($con, 'datamahasiswa');
mysqli_query($con, $q);
mysqli_close($con);
header('location:tampil.php')
?>