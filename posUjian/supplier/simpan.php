<?php
if (isset($_POST['simpan'])) {
    include_once "koneksi.php";
    $nama = $_POST['nama'];
    $alamat = $_POST['alamat'];
    $total = $_POST['total'];

    $sql = "INSERT INTO supplier SET nama='$nama',alamat='$alamat',total='$total'";
    $query = mysqli_query($koneksi, $sql);
    if ($query) {
        header('location: index.php?m=supplier');
    }else{
        include 'index.php?m=supplier';
        echo '<script language="JavaScript">';
        echo 'alert("Data gagal di tambah")';
        echo '<script>';
    }
}else{
    echo '<script>window.history.back()</script>';
}