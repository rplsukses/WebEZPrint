<?php
    include 'admin/core/init.php';
    include 'include/header.php';
    include 'include/footer.php';
?>


<?php

$ambil=$conn->query("SELECT * FROM 
                     produk, kategori where
                     produk.id_mitra=1 and produk.id_kategori=kategori.id_kategori ");
$pecah = $ambil->fetch_assoc();
$conn->query("DELETE FROM produk, kategori where
produk.id_mitra=1 and produk.id_kategori=kategori.id_kategori ");

echo "<script>alert('produk terhapus');</script>";
echo "<script>location='produk.php?halaman=produk';</script>";
?>

