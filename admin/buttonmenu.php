<div class="mt-4"><a href="<?php echo fiturWa($row_akun["telepon"]); ?>" target="_blank"><button
            class="button-custom color-green">Whatsapp</button></a></div>
<div class="mt-3"><a href="edit.php?id=<?php echo $row_akun["id"]; ?>"><button
            class="button-custom color-orange">Edit</button></a></div>

<?php
if ($row_akun["tgl_pengembalian"] < $tgl_ini and $row_akun["status_barang"] == "sewa") {
    ?>
    <div class="mt-3"><button class="button-custom color-red"
            onclick="berhentiSewa('Yakin untuk berhenti sewa pada member <?php echo $row_akun['nama']; ?>','prosesberhentisewa.php?id=<?php echo $row_akun['id']; ?>')">Berhenti
            Sewa</button></div>

    <?php
}
?>

<?php
if ($row_akun["status_barang"] == "belum ambil") {
    ?>
    <div class="mt-3"><button class="button-custom color-blue"
            onclick="sudahAmbil('Yakin barang sewa sudah diambil dari member <?php echo $row_akun['nama']; ?>','prosesambil.php?id=<?php echo $row_akun['id']; ?>')">Sudah
            Ambil</button></div>

    <?php
}
?>