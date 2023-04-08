<?php
$star = 0;
$pict = "bintang.png";
if (isset($_POST['star'])) {
    $star = $_POST['star'];
}
if (isset($_POST['tambah'])) {
    $star++; 
}
if (isset($_POST['kurang'])) {
    $star--;
}
?>
<?php
if ($star == 0):
?>
    <form action="" method="POST">
        Jumlah bintang: <input type="number" name="star"><br>
        <button type="submit">Submit</button><br>
    </form>
<?php else: ?>
    <form action="" method="POST">
        <button name="tambah">Tambah</button>
        <input type="hidden" name="star" value="<?= $star ?>">
        <button name="kurang">Kurang</button>
    </form>
    <?php for ($i=0; $i<$star; $i++): ?>
        <img src="star.png" width="100px" height="100px">
    <?php endfor; ?>
<?php endif; ?>
