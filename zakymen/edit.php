<?php
include("koneksi.php");
if(!isset($_GET['id_peserta'])){
    header('location:tampil.php');
}
$id=$_GET['id_peserta'];
$sql = "SELECT * FROM tb_peserta INNER JOIN tb_paket ON tb_peserta.id_paket = tb_paket.id_paket 
WHERE tb_peserta.id_peserta='$id'";
$query=mysqli_query($koneksi,$sql);
$idp = mysqli_fetch_assoc($query);


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EDIT</title>
</head>
<body>
<center>
    <h1>EDIT PESERTA</h1>
    <table border="2">
        <form action="proses-edit.php" method="POST">
        <input type="hidden" name="id_peserta" value="<?php echo $idp['id_peserta']?>" />
        <tr>
        <td><label for="nama_peserta">Nama Peserta:</label></td>
        <td><input type="text" name="nama_peserta" value="<?php echo $idp['nama_peserta']?>" /></td>
        </tr>
        <tr>
        <td><label for="alamat">Alamat:</label></td>
        <td><input type="text" name="alamat" value="<?php echo $idp['alamat']?>" /></td>
        </tr>
        <tr>
        <td><label for="jenis_kelamin">Jenis Kelamin:</label></td>
        <td><input type="radio" name="jenis_kelamin" value="Laki-Laki" >Laki-Laki
            <input type="radio" name="jenis_kelamin" value="Perempuan" >Perempuan</td>
        
        </tr>
        <tr>
        <td><label for="nama_paket">Nama Paket:</label></td>
        <td><input type="radio" name="nama_paket" value="Standar">Standar
            <input type="radio" name="nama_paket" value="Gold">Gold
            <input type="radio" name="nama_paket" value="Silver">Silver</td>
        </tr>
        <tr>
        <td><label for="tujuan">Tujuan:</label></td>
        <td><input type="text" name="tujuan" value="<?php echo $idp['tujuan']?>" /></td>
        </tr>
        <tr>
        <td><label for="tanggal_keberangkatan">Tanggal Berangkat:</label></td>
        <td><input type="date" name="tanggal_keberangkatan" value="<?php echo $idp['tanggal_keberangkatan']?>" /></td>
        </tr>
        <tr>
        <td><input type="submit" name="edit" value="EDIT"></td>
        </tr>
        </form>
    </table>
</center>
    
</body>
</html>