<?php
if (isset($_POST['simpan'])) {
    include_once "koneksi.php";
    $supplier_id = $_POST['supplier_id'];
    $total       = $_POST['total'];

    $sql = "INSERT INTO penjualan SET supplier_id='$supplier_id', total='$total'";
    $query = mysqli_query($koneksi, $sql);
    if ($query) {
        header('location: index.php?m=penjualan');
    }else{
        include 'index.php?m=penjualan';
        echo '<script language="JavaScript">';
        echo 'alert("Data gagal di tambah")';
        echo '<script>';
    }
}else{
    echo '<script>window.history.back()</script>';
}