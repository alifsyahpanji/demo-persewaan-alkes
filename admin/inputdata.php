<?php


$telepon = $_POST["telepon"];
$nama = $_POST["nama"];
$alamat = $_POST["alamat"];
$barang = $_POST["barang"];
$tglpinjam = $_POST["tglpinjam"];
$tglkembali = $_POST["tglkembali"];


include("env.php");

$sql_input = "INSERT INTO member (telepon, nama, alamat, barang, tgl_peminjaman, tgl_pengembalian, status_barang) VALUES ('$telepon', '$nama', '$alamat', '$barang', '$tglpinjam', '$tglkembali', 'sewa')";
$run_input = mysqli_query($conn, $sql_input);

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

        if ($run_input) {
            ?>
            <div class="cart-container cart-container-margin">
                <div class="text-index">Data pelanggan baru berhasil di simpan.</div>
                <div class=" mt-3 mb-3"><a href="pencarian.php?telepon=<?php echo $telepon; ?>"><button
                            class="button-custom color-blue">Lihat hasil</button></a></div>
            </div>
            <?php
        } else {
            ?>
            <div class="cart-container cart-container-margin">
                <div class="text-index">Gagal menyimpan data pelanggan baru, kemungkinan ada kesalahan sistem.</div>
            </div>


            <?php
        }

        ?>


        <div class="mt-4 mb-5"></div>

    </div>

    <script src="../assets/js/bootstrap.bundle.min.js"></script>
</body>

</html>