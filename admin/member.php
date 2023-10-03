<?php

include("env.php");
include("tglformat.php");

$batas = 50;
$halaman = isset($_GET['halaman']) ? (int) $_GET['halaman'] : 1;
$halaman_awal = ($halaman > 1) ? ($halaman * $batas) - $batas : 0;

$previous = $halaman - 1;
$next = $halaman + 1;

$sql_get_data = "SELECT id FROM member";
$data = mysqli_query($conn, $sql_get_data);
$jumlah_data = mysqli_num_rows($data);
$total_halaman = ceil($jumlah_data / $batas);

$data_member = mysqli_query($conn, "SELECT * FROM member ORDER BY nama LIMIT $halaman_awal, $batas");

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
            <div class="text-index">Ini adalah semua data pelanggan anda, total ada
                <?php echo $jumlah_data; ?> member
            </div>



        </div>

        <?php include("pagination.php"); ?>


        <?php
        if ($jumlah_data > 0) {
            while ($row_akun = mysqli_fetch_assoc($data_member)) {
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

                    <div class="mt-4"><a href="edit.php?id=<?php echo $row_akun["id"]; ?>"><button
                                class="button-custom color-orange">Edit</button></a></div>
                </div>
                <?php
            }
        }
        ?>

    </div>

    <?php
    include("backtop.php");
    ?>

    <script src="../assets/js/bootstrap.bundle.min.js"></script>
</body>

</html>