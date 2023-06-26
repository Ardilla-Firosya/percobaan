<?php

$nama = $_POST['nama'];
$npm = $_POST['npm'];
$asal = $_POST['asal'];

$q = "insert into mha values ('$npm', '$nama', '$asal')";

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