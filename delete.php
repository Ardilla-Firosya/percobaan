<html>
<body>
<?php
$npm = $_GET['npm'];
$con = mysqli_connect('localhost','root', '', 'datamahasiswa') ;
if(!$con)
{
    die('gagal konek'.mysqli_error($con));
}

$query = "DELETE FROM mha WHERE npm = '$npm'";
mysqli_query($con, $query);
header('Location: tampil.php');
?>
</body>
</html>