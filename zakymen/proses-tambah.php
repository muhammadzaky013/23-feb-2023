<?php
include("koneksi.php");
if(isset($_POST['tambah'])){
    $nama_peserta=$_POST['nama_peserta'];
    $alamat=$_POST['alamat'];
    $jk=$_POST['jenis_kelamin'];
    $nampak=$_POST['nama_paket'];
    $tujuan=$_POST['tujuan'];
    $tanggal=$_POST['tanggal_keberangkatan'];
    
    $sql="INSERT INTO tb_paket(nama_paket,tujuan,tanggal_keberangkatan)
     VALUES ('$nampak','$tujuan','$tanggal')";
    $query=mysqli_query($koneksi,$sql);

    $sql="SELECT max(id_paket) AS paket_id FROM tb_paket LIMIT 1";
    $query=mysqli_query($koneksi,$sql);

    $data=mysqli_fetch_array($query);
    $paket_id=$data['paket_id'];

    $sql="INSERT INTO tb_peserta(nama_peserta, alamat,jenis_kelamin,id_paket) 
    VALUES ('$nama_peserta', '$alamat','$jk','$paket_id')"; 
    $query=mysqli_query($koneksi,$sql);

    if($query){
        header('location:tampil.php?status=sukses');
    }else{
        header('location:tampil.php?status=gagal');
    }
}
?>