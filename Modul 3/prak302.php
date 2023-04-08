<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>PRAK302</title>
</head>
<body>
    <?php
    $tinggi = "";
    $alamat = "";
    if (isset($_POST['submit'])){
        $tinggi = $_POST['tinggi'];
        $alamat = $_POST['alamat'];
    }
    ?>
    <form action="" method="POST">
        Tinggi: <input type="number" name="tinggi" value="<?php echo $tinggi; ?>"><br>
        Alamat Gambar: <input type="text" name="alamat" value="<?php echo $alamat; ?>"><br>
        <input type="submit" value="cetak" name="submit">
    </form>

    <?php
    if (isset($_POST['submit'])){
        $i = 0;
        while ($i < $tinggi) {
            $j = 0;
            while ($j < $tinggi) {
                if ($j < $i) {
                    echo "&nbsp ";
                } else {
                    echo "<img src='" . $alamat . "' width='10px' height='10px'>";
                }
                $j++;
            }
            $i++;
            echo "<br>";
        }
    }
    ?>
</body>
</html>
