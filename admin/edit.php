<?php


$id = $_GET["id"];

include("env.php");

$sql_get_data = "SELECT * FROM member WHERE id = $id";
$data = mysqli_query($conn, $sql_get_data);
$row_akun = mysqli_fetch_assoc($data);


?>

<!doctype html>
<html lang="id">

<?php
include("header.php");
?>

<body>
    <?php include("nav.php");
    ?>

    <div class="container-margin">

        <div class="cart-container cart-container-margin">
            <div class="text-index">Anda dapat mengedit data pelanggan di bawah ini</div>
        </div>


        <div class="cart-container cart-container-margin">


            <form action="prosesedit.php" method="post">
                <div class="mt-2">
                    <label for="telepon" class="form-label text-index">Telepon:</label>
                    <input type="number" class="form-control" id="telepon" name="telepon"
                        value="<?php echo $row_akun["telepon"]; ?>" required>
                </div>

                <div class="mt-2">
                    <label for="nama" class="form-label text-index">Nama:</label>
                    <input type="text" class="form-control" id="nama" name="nama"
                        value="<?php echo $row_akun["nama"]; ?>" required>
                </div>

                <div class="mt-2">
                    <label for="alamat" class="form-label text-index">Alamat:</label>
                    <textarea class="form-control" id="alamat" name="alamat"
                        rows="3"><?php echo $row_akun["alamat"]; ?></textarea>
                </div>

                <div class="mt-2">
                    <label for="barang" class="form-label text-index">Barang:</label>
                    <textarea class="form-control" id="barang" name="barang"
                        rows="3"><?php echo $row_akun["barang"]; ?></textarea>
                </div>

                <div class="mt-3">
                    <label for="tglpinjam" class="form-label text-index">Tgl Peminjaman:</label>
                    <input type="date" class="form-control" id="tglpinjam" name="tglpinjam"
                        value="<?php echo $row_akun["tgl_peminjaman"]; ?>" required>
                </div>

                <div class="mt-3">
                    <label for="tglkembali" class="form-label text-index">Tgl Pengembalian:</label>
                    <input type="date" class="form-control" id="tglkembali" name="tglkembali"
                        value="<?php echo $row_akun["tgl_pengembalian"]; ?>" required>
                </div>


                <div class="mt-2">
                    <label for="statusbarang" class="form-label text-index">Status Barang:</label>
                    <select name="statusbarang" id="statusbarang" class="form-control">

                        <option value="sewa" <?php if ($row_akun["status_barang"] == "sewa") {
                            echo "selected";
                        } ?>>Sewa
                        </option>

                        <option value="belum ambil" <?php if ($row_akun["status_barang"] == "belum ambil") {
                            echo "selected";
                        } ?>>Belum Ambil
                        </option>

                        <option value="kosong" <?php if ($row_akun["status_barang"] == "kosong") {
                            echo "selected";
                        } ?>>Kosong
                        </option>

                    </select>
                </div>


                <input type="hidden" name="id" value="<?php echo $id; ?>">

                <button type="submit" class="button-custom color-blue mt-4 mb-3">Simpan</button>
            </form>

        </div>

        <div class="mt-4 mb-4"></div>
    </div>

    <script src="../assets/js/bootstrap.bundle.min.js"></script>
</body>

</html>