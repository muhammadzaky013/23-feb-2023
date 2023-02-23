<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TAMBAH</title>
</head>
<body>
<center>
    <h1>TAMBAH PESERTA</h1>
    <table border="2">
        <form action="proses-tambah.php" method="POST">
        <tr>
        <td><label for="nama_peserta">Nama Peserta:</label></td>
        <td><input type="text" name="nama_peserta"></td>
        </tr>
        <tr>
        <td><label for="alamat">Alamat:</label></td>
        <td><input type="text" name="alamat"></td>
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
        <td><input type="text" name="tujuan"></td>
        </tr>
        <tr>
        <td><label for="tanggal_keberangkatan">Tanggal Berangkat:</label></td>
        <td><input type="date" name="tanggal_keberangkatan"></td>
        </tr>
        <tr>
        <td><input type="submit" name="tambah" value="TAMBAH"></td>
        </tr>
        </form>
    </table>
    <p>
    <a href="tampil.php"><input type="button" name="kembali" value="KEMBALI"></a>
    <a href="index.php"><input type="button" name="index" value="MENU"></a>
    </p>
</center>
    
</body>
</html>
