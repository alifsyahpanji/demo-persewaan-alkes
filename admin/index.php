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

            <div class="text-index">Silahkan gunakan fitur yang tersedia pada aplikasi dibawah ini</div>

            <div class="container-menu"><a href="sedangsewa.php"><button class="button-custom color-green"><img
                            src="../assets/image/sewa.png" class="icon-menu" alt="sewa"><span class="ms-3">Sedang
                            Sewa</span> </button></a>
            </div>

            <div class="container-menu"><a href="sewahabis.php"><button class="button-custom color-red"><img
                            src="../assets/image/habis.png" class="icon-menu" alt="habis"><span class="ms-3">Masa Sewa
                            Habis</span> </button></a>
            </div>

            <div class="container-menu"><a href="belumambil.php"><button class="button-custom color-orange"><img
                            src="../assets/image/belum-ambil.png" class="icon-menu" alt="belum ambil"><span
                            class="ms-3">Belum
                            Ambil</span></button></a>
            </div>

            <div class="container-menu"><a href="member.php"><button class="button-custom color-blue"><img
                            src="../assets/image/member.png" class="icon-menu" alt="member"><span
                            class="ms-3">Member</span></button></a>
            </div>

        </div>

        <div class="cart-container cart-container-margin">
            <div class="text-index">
                Silahkan gunakan fitur pencarian untuk menemukan data pelanggan atau input pelanggan baru.
            </div>

            <form action="pencarian.php" method="get">
                <div class="mt-4">
                    <label for="telepon" class="form-label text-index">Telepon:</label>
                    <input type="text" class="form-control" id="telepon" name="telepon" placeholder="083842368811"
                        onchange="nomorWa();" required>
                </div>

                <button type="submit" class="button-custom color-blue mt-4 mb-4"><img
                        src="../assets/image/search-white.png" class="icon-menu" alt="search"></button>
            </form>

        </div>

        <div class="mt-4 mb-5"></div>

    </div>

    <?php include("nomorwa.php"); ?>
    <script src="../assets/js/bootstrap.bundle.min.js"></script>
</body>

</html>