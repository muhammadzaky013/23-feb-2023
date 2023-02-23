<?php 
include("koneksi.php");

$id=$_GET['id_peserta'];

$sql="DELETE FROM tb_paket where id_paket='$id'";
$query=mysqli_query($koneksi,$sql);

$sql="DELETE FROM tb_peserta where id_peserta='$id'";
$query=mysqli_query($koneksi,$sql);

if($query){
    header("Location:tampil.php?status=sukses");
}else{
    die("akses dilarang");
}

?>