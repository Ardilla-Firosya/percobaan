<html>
<body>

<?php
$con = mysqli_connect('localhost', 'root', '');
if(!$con)
{
    die('gagal konek'.mysqli_error($con));
}

mysqli_select_db($con, 'datamahasiswa');
$q = "select * from mha order by npm";
$hasil_query = mysqli_query($con, $q);
?>
</body>
</html>
<html>
<body>
    <table border="1">
    <tr>
    <th>npm</th>
    <th>nama</th>
    <th>asal</th>
    <th>edit / delete</th>
    </tr>
            
    <?php while($row = mysqli_fetch_assoc($hasil_query)): ?>
    <tr>
    <td><?php echo $row['npm']; ?></td>
    <td><?php echo $row['nama']; ?></td>
    <td><?php echo $row['asal']; ?></td>
    <td>
    <a href="edit.php?npm=<?php echo $row['npm']; ?>">edit</a>
    <a>/</a>
    <a href="delete.php?npm=<?php echo $row['npm']; ?>">hapus</a>
    </td>
    </tr>
    <?php endwhile; ?>
    </table>
    <a href="simpan.html">add</a>
    </body>
</html>