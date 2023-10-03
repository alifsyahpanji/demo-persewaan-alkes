<?php


$id = $_GET["id"];

include("env.php");

$sql_update = "UPDATE member SET status_barang = 'belum ambil' WHERE id = $id";
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
                <div class="text-index">Pelangan telah berhasil berhenti sewa.</div>
            </div>
            <?php
        } else {
            ?>
            <div class="cart-container cart-container-margin">
                <div class="text-index">Palanggan gagal berhenti sewa, kemungkinan ada kesalahan sistem.</div>
            </div>


            <?php
        }

        ?>


        <div class="mt-4 mb-5"></div>

    </div>

    <script src="../assets/js/bootstrap.bundle.min.js"></script>
</body>

</html>