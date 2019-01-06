<?php
    include 'core/init.php';

    $conn->query("DELETE FROM kategori WHERE id_kategori='$_GET[id]'");

    echo "<script>alert('Kategori succesfully deleted !'); </script>";
    echo "<script>location='kategori.php';</script>";

?>