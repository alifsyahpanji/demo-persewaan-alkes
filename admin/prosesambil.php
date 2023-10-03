<?php


$id = $_GET["id"];

include("env.php");

$sql_update = "UPDATE member SET barang = NULL, tgl_peminjaman = NULL, tgl_pengembalian = NULL, status_barang = 'kosong' WHERE id = $id";
$run_update = mysqli_query($conn, $sql_update);

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

        if ($run_update) {
            ?>
            <div class="cart-container cart-container-margin">
                <div class="text-index">Barang sewa telah berhasil diambil.</div>
            </div>
            <?php
        } else {
            ?>
            <div class="cart-container cart-container-margin">
                <div class="text-index">Barang sewa gagal di ambil, kemungkinan ada kesalahan sistem.</div>
            </div>


            <?php
        }

        ?>


        <div class="mt-4 mb-5"></div>

    </div>

    <script src="../assets/js/bootstrap.bundle.min.js"></script>
</body>

</html>