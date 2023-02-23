<?php
include("koneksi.php");
if(isset( $_POST['edit'])){
    $id=$_POST['id_peserta'];
    $nama_peserta=$_POST['nama_peserta'];
    $alamat=$_POST['alamat'];
    $jk=$_POST['jenis_kelamin'];
    $nampak=$_POST['nama_paket'];
    $tujuan=$_POST['tujuan'];
    $tanggal=$_POST['tanggal_keberangkatan'];


    $sql = "UPDATE tb_peserta SET nama_peserta='$nama_peserta', alamat='$alamat', jenis_kelamin='$jk' 
    WHERE id_peserta='$id'";
    $query =mysqli_query($koneksi, $sql);

    $sql = "UPDATE tb_paket SET nama_paket='$nampak', tujuan='$tujuan', tanggal_keberangkatan='$tanggal' 
    WHERE id_paket='$id'";
    $queryy =mysqli_query($koneksi, $sql);

    if($query){
        header('location:tampil.php?status=sukses');
    }else{
        die('gagal mengedit');
    }
}
?>