<?php

$telepon = $_GET["telepon"];

include("env.php");
include("tglformat.php");
include("fiturwa.php");
include("lokaldate.php");

$sql_get_data = "SELECT * FROM member WHERE telepon = '$telepon' ";
$data = mysqli_query($conn, $sql_get_data);
$jumlah_data = mysqli_num_rows($data);


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



        <?php
        if ($jumlah_data > 0) {
            ?>
            <div class="cart-container cart-container-margin">
                <div class="text-index">Ini adalah pelanggan lama anda</div>
            </div>

            <?php

            while ($row_akun = mysqli_fetch_assoc($data)) {
                ?>
                <div class="cart-container cart-container-margin text-data">
                    <div>Telepon:
                        <?php echo $row_akun["telepon"]; ?>
                    </div>
                    <div>Nama:
                        <?php echo $row_akun["nama"]; ?>
                    </div>
                    <div>Alamat:
                        <?php echo $row_akun["alamat"]; ?>
                    </div>
                    <div class="mt-4">Barang yang disewa:
                        <?php echo $row_akun["barang"]; ?>
                    </div>
                    <div class="mt-4">Tgl Peminjaman:
                        <?php echo tgl($row_akun["tgl_peminjaman"]); ?>
                    </div>
                    <div>Tgl Pengembalian:
                        <?php echo tgl($row_akun["tgl_pengembalian"]); ?>
                    </div>
                    <div class="mt-4">Status Barang:
                        <?php echo $row_akun["status_barang"]; ?>
                    </div>


                    <?php
                    include("buttonmenu.php");
                    ?>


                </div>
                <?php
            }
        } else {
            ?>
            <div class="cart-container cart-container-margin">
                <div class="text-index">Ini adalah pelanggan baru anda, silahkan input data terlebih dahulu.</div>
            </div>

            <div class="cart-container cart-container-margin">


                <form action="inputdata.php" method="post">
                    <div class="mt-2">
                        <label for="telepon" class="form-label text-index">Telepon:</label>
                        <input type="number" class="form-control" id="telepon" name="telepon"
                            value="<?php echo $telepon; ?>" required>
                    </div>

                    <div class="mt-2">
                        <label for="nama" class="form-label text-index">Nama:</label>
                        <input type="text" class="form-control" id="nama" name="nama" required>
                    </div>

                    <div class="mt-2">
                        <label for="alamat" class="form-label text-index">Alamat:</label>
                        <textarea class="form-control" id="alamat" name="alamat" rows="3"></textarea>
                    </div>

                    <div class="mt-2">
                        <label for="barang" class="form-label text-index">Barang:</label>
                        <textarea class="form-control" id="barang" name="barang" rows="3"></textarea>
                    </div>

                    <div class="mt-3">
                        <label for="tglpinjam" class="form-label text-index">Tgl Peminjaman:</label>
                        <input type="date" class="form-control" id="tglpinjam" name="tglpinjam" required>
                    </div>

                    <div class="mt-3">
                        <label for="tglkembali" class="form-label text-index">Tgl Pengembalian:</label>
                        <input type="date" class="form-control" id="tglkembali" name="tglkembali" required>
                    </div>

                    <button type="submit" class="button-custom color-blue mt-4 mb-3">Simpan</button>
                </form>

            </div>

            <?php
        }
        ?>



        <div class="mt-4 mb-4"></div>
    </div>

    <?php
    include("confirm.php");
    ?>
    <script src="../assets/js/bootstrap.bundle.min.js"></script>
</body>

</html>