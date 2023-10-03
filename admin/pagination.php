<div class="container-pagination">
    <a <?php if ($halaman > 1) {
        echo "href=?halaman=" . $previous;
    } ?>><button class="btn-pagination" <?php if ($halaman == 1) {
         echo "disabled";
     } ?>>Prev</button></a>

    <?php
    for ($x = 1; $x <= $total_halaman; $x++) {
        ?>
        <a href="?halaman=<?php echo $x ?>"><button class="btn-pagination <?php if ($x == $halaman) {
               echo "active-pagination";
           } ?>"><?php echo $x; ?></button></a>
        <?php
    }

    ?>

    <a <?php if ($halaman < $total_halaman) {
        echo "href=?halaman=" . $next;
    } ?>><button class="btn-pagination" <?php if ($halaman == $total_halaman) {
         echo "disabled";
     } ?>>Next</button></a>
</div>