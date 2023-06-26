<html>
<body>

<?php
$con = mysqli_connect('localhost', 'root', '', 'datamahasiswa');
if(!$con)
{
    die('gagal konek'.mysqli_error($con));
}

$npm = $_GET['npm'];
$q = "select * from mha where npm=$npm";
mysqli_select_db($con, 'datamahasiswa');
$hasil_query = mysqli_query($con, $q);
$row=mysqli_fetch_array($hasil_query);
$npm = $row['npm'];
$nama = $row['nama'];
$asal = $row['asal'];
?>
<form action="update.php" method="post">
<table>
<tr>
	<td> npm </td>
    <td> : </td>
	<td> <input type ="text" name ="npm" value ="<?php echo "$npm"; ?>" disabled>
    <input type ="hidden" name ="txtnpm" value ="<?php echo "$npm"; ?>"> </td>
</tr>

<tr>
	<td> nama </td>
    <td> : </td>
	<td> <input type ="text" name ="nama" value ="<?php echo "$nama"; ?>"> </td>
</tr>

<tr>
	<td> asal </td>
    <td> : </td> 
	<td> <input type ="text" name ="asal" value ="<?php echo "$asal"; ?>"> </td>
</tr>

<tr>
    <td colspan="3"><input type="submit" value="update"></td>
</tr>
</table>
</form>

</body>
</html>