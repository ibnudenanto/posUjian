<section class="content">
    <div class="row">
        <div class="col-8">
            <h1>Modul Edit supplier</h1>
        </div>
        <div class="col-4">
            <a href="?m=supplier&s=tampil" class="btn btn-large btn-info float-end">Kembali</a>
        </div>
        <?php
        include_once('koneksi.php');
        $id    = $_GET['id'];
        $sql   = "SELECT * FROM supplier WHERE id='$id'";
        $query = mysqli_query($koneksi, $sql);
        $row = mysqli_fetch_array($query);
        ?>
        <div class="col">
            <form action="?m=supplier&s=update" method="post">
                <div class="mb-2">
                    <label for="">Nama supplier</label>
                    <input type="text" name="nama" value="<?= $row['nama'] ?>" class="form-control" autofocus>
                    <!-- value="<?// echo $row['nama'] ?>"      sama wae ke di atas-->
                </div>
                <div class="mb-2">
                    <label for="">alamat</label>
                    <input type="text" name="alamat" value="<?= $row['alamat'] ?>" class="form-control">
                </div>
                <div class="mb-2">
                    <label for="">total</label>
                    <input type="number" name="total" value="<?= $row['total'] ?>" class="form-control">
                </div>
                <div class="mb-2">
                    <input type="hidden" name="id" value="<?= $row['id'] ?>">
                    <input type="reset" class="btn btn-warning">
                    <input type="submit" name="update" value="Update" onclick="return confirm('Are you sure?')" class="btn btn-primary">
                </div>
            </form>
        </div>
    </div>
</section>