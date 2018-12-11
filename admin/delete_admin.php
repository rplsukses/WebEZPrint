<?php
    include 'core/init.php';

    $conn->query("DELETE FROM admin WHERE id_admin='$_GET[id]'");

    echo "<script>alert('Data admin succesfully deleted !'); </script>";
    echo "<script>location='admin.php';</script>";

?>