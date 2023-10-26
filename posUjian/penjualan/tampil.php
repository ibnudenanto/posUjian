<div class = "content">
<div class = "row">
<a   href  = "?m=penjualan&s=tambah" class = "btn btn-secondary btn-large">Tambah penjualan</a>
        <h2>Modul penjualan</h2>
        <table class = "table table-bordered table-hover table-striped">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama Supplier</th>
                    <th>Total</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
               <?php
               include_once('koneksi.php');
               $sql   = 'SELECT penjualan.id, supplier_id, total  FROM `penjualan` JOIN supplier ON supplier.id=penjualan.supplier_id';
               $query = mysqli_query($koneksi, $sql);
               if (mysqli_num_rows($query) == 0) {
                echo "<tr><td colspan='5'> Data Kosong</td></tr>";
               } else {
                  /*$penjualan = mysqli_fetch_array($query);
                foreach ($penjualan as $no => $r){
                    echo "<tr>";
                    echo "<td>" . ($no+1) . "</td>";
                }*/
                $no = 1;
                while ($r=mysqli_fetch_assoc($query)) {
                echo "<tr>";
                echo "<td>$no</td>";
                echo "<td>" . $r['supplier_id'] . "</td>";
                echo "<td>" . $r['total'] . "</td>";

                echo '<td><a href="?m=penjualan&s=edit&id='.$r['id'].'"class="btn btn-warning">Edit </a> 
                <a href="?m=penjualan&s=hapus&id='.$r['id'].'" onclick="return confirm(\'Menghapus penjualan akan menghilangkan SEMUA data penjualan yang ada pada penjualan tersebut, yakin penjualan ini akan dihapus?\')" class="btn btn-sm btn-danger">Hapus</a></td>';
                $no++;
               }
            }
               ?>
            </tbody>
        </table>
    </div>
</div>