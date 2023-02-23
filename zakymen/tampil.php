<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TAMPIL</title>
</head>
<body>
<center>
    <h1>Data Peserta </h1>
    <table border="1">
        <tr>
            <td>Nama Peserta</td>
            <td>Alamat</td>
            <td>Jenis Kelamin</td>
            <td>Nama Paket</td>
            <td>Tujuan</td>
            <td>Tanggal Berangkat</td>
            <td>Aksi</td>
        </tr>
    

<?php 
include("koneksi.php");
$query = mysqli_query($koneksi,"SELECT * FROM tb_peserta INNER JOIN tb_paket ON tb_peserta.id_paket = tb_paket.id_paket");
while($row=mysqli_fetch_array($query)){
    echo"<tr>";
        echo"<td>".$row['nama_peserta']."</td>";
        echo"<td>".$row['alamat']."</td.>";
        echo"<td>".$row['jenis_kelamin']."</td>";
        echo"<td>".$row['nama_paket']."</td>";
        echo"<td>".$row['tujuan']."</td>";
        echo"<td>".$row['tanggal_keberangkatan']."</td>";
        echo"<td>";
        echo"<a href='edit.php?id_peserta=".$row['id_peserta']."'>Edit</a>|";
        echo"<a href='hapus.php?id_peserta=".$row['id_peserta']."'>Hapus</a>|";
        echo"</td>";
        echo"</tr>";
    }
?>

</table>
<p>
    <a href="tambah.php"><input type="button" name="tambah" value="TAMBAH"></a>
    <a href="index.php"><input type="button" name="index" value="MENU"></a>
</p>
</center>   
</body>
</html>