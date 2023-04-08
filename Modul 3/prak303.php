<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>PRAK303</title>
</head>
<body>
    <form action="" method="POST">
        Batas Bawah : <input type="number" name="bawah" value="<?php echo isset($_POST['submit']) ? $_POST['bawah'] : '' ?>"> <br>
        Batas Atas : <input type="number" name="atas" value="<?php echo isset($_POST['submit']) ? $_POST['atas'] : '' ?>"> <br>
        <input type="submit" value="cetak" name="submit">
    </form></br>

    <?php
    if (isset($_POST['submit'])){
        $bawah = $_POST['bawah'];
        $atas = $_POST['atas'];
        $i = $bawah;

        do {
            echo ($i + 7) % 5 === 0 ? '<img src="star.png" width="15px" height="15px">' : $i . "&nbsp;";
            $i++;
        } while($i <= $atas);
    }
    ?>
</body>
</html>
