<div class = "content">
<div class = "row">
<a   href  = "?m=supplier&s=tambah" class = "btn btn-secondary btn-large">Tambah supplier</a>
        <h2>Modul supplier</h2>
        <table class = "table table-bordered table-hover table-striped">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama supplier</th>
                    <th>Alamat</th>
                    <th>total</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
               <?php
               include_once('koneksi.php');
               $sql   = 'SELECT * FROM supplier';
               $query = mysqli_query($koneksi, $sql);
               if (mysqli_num_rows($query) == 0) {
                echo "<tr><td colspan='5'> Data Kosong</td></tr>";
               } else {
                  /*$supplier = mysqli_fetch_array($query);
                foreach ($supplier as $no => $r){
                    echo "<tr>";
                    echo "<td>" . ($no+1) . "</td>";
                }*/
                $no = 1;
                while ($r=mysqli_fetch_assoc($query)) {
                echo "<tr>";
                echo "<td>$no</td>";
                echo "<td>" . $r['nama'] . "</td>";
                echo "<td>" . $r['alamat'] . "</td>";
                echo "<td>" . $r['total'] . "</td>";
                echo '<td><a href="?m=supplier&s=edit&id='.$r['id'].'"class="btn btn-warning">Edit </a> 
                <a href="?m=supplier&s=hapus&id='.$r['id'].'" onclick="return confirm(\'Menghapus supplier akan menghilangkan SEMUA data penjualan yang ada pada supplier tersebut, yakin supplier ini akan dihapus?\')" class="btn btn-sm btn-danger">Hapus</a></td>';
                $no++;
               }
            }
               ?>
            </tbody>
        </table>
    </div>
</div>