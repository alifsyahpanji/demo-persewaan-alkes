<?php


$id = $_POST["id"];
$telepon = $_POST["telepon"];
$nama = $_POST["nama"];
$alamat = $_POST["alamat"];
$barang = $_POST["barang"];
$tglpinjam = $_POST["tglpinjam"];
$tglkembali = $_POST["tglkembali"];
$status_barang = $_POST["statusbarang"];


include("env.php");

$sql_get_data = "SELECT id FROM member WHERE telepon = '$telepon' ";
$data = mysqli_query($conn, $sql_get_data);
$jumlah_data = mysqli_num_rows($data);

$sql_update = "UPDATE member SET telepon = '$telepon', nama = '$nama', alamat = '$alamat', barang = '$barang', tgl_peminjaman = '$tglpinjam', tgl_pengembalian = '$tglkembali', status_barang = '$status_barang' WHERE id = $id";





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
            $get_id_member = mysqli_fetch_assoc($data);
            $cek_id = $get_id_member["id"];

            if ($cek_id == $id) {
                $data_update = mysqli_query($conn, $sql_update);
                if ($data_update) {
                    ?>
                    <div class="cart-container cart-container-margin">
                        <div class="text-index">Data pelanggan berhasil di ubah.</div>
                        <div class=" mt-3 mb-3"><a href="pencarian.php?telepon=<?php echo $telepon; ?>"><button
                                    class="button-custom color-blue">Lihat hasil</button></a></div>
                    </div>
                    <?php
                } else {
                    ?>
                    <div class="cart-container cart-container-margin">
                        <div class="text-index">Gagal mengubah data pelanggan, kemungkinan ada kesalahan sistem.</div>
                    </div>


                    <?php
                }

            } else {
                ?>
                <div class="cart-container cart-container-margin">
                    <div class="text-index">Maaf nomor telepon yang baru anda ubah ini sudah ada pada data pelanggan anda.</div>
                    <div class=" mt-3 mb-3"><a href="edit.php?id=<?php echo $id; ?>"><button
                                class="button-custom color-blue">Kembali Edit</button></a></div>
                </div>
                <?php

            }

        } else {
            $data_update = mysqli_query($conn, $sql_update);
            if ($data_update) {
                ?>
                <div class="cart-container cart-container-margin">
                    <div class="text-index">Data pelanggan berhasil di ubah.</div>
                    <div class=" mt-3 mb-3"><a href="pencarian.php?telepon=<?php echo $telepon; ?>"><button
                                class="button-custom color-blue">Lihat hasil</button></a></div>
                </div>
                <?php
            } else {
                ?>
                <div class="cart-container cart-container-margin">
                    <div class="text-index">Gagal mengubah data pelanggan, kemungkinan ada kesalahan sistem.</div>
                </div>


                <?php
            }

        }
        ?>




        <div class="mt-4 mb-5"></div>

    </div>

    <script src="../assets/js/bootstrap.bundle.min.js"></script>
</body>

</html>