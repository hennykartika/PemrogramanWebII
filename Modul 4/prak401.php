<?php
    $panjang = "";
    $lebar = "";
    $nilai = "";

    if (isset($_POST["submit"])) {
        $panjang = $_POST["panjang"];
        $lebar = $_POST["lebar"];
        $nilai = $_POST["nilai"];
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <style>
        table, tr, td {
            border: solid 1px black;
            border-collapse: collapse;
            padding: 5px;
            text-align: center;
        }
    </style>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Soal 1</title>
</head>
<body>
    <form method="POST">
        Panjang: <input type="text" name="panjang" value="<?php echo htmlspecialchars($panjang); ?>"><br>
        Lebar: <input type="text" name="lebar" value="<?php echo htmlspecialchars($lebar); ?>"><br>
        Nilai: <input type="text" name="nilai" value="<?php echo htmlspecialchars($nilai); ?>"><br>
        <input type="submit" name="submit" value="Cetak">
    </form>

    <?php
        if (isset($_POST["submit"])){
            $isi = explode(" ", $nilai);
            $panjangNilai = count($isi);

            if ($panjang * $lebar == $panjangNilai){
                $count = 0;
                $tampil = [];

                for ($i=0; $i < $panjang; $i++) {
                    for ($j=0; $j < $lebar; $j++) {
                        $tampil[$i][$j] = $isi[$count];
                        $count++;
                    }
                }

                echo "<table>";

                for ($i=0; $i < $panjang; $i++) {
                    echo "<tr>";
                    for ($j=0; $j < $lebar; $j++) {
                        echo "<td>".htmlspecialchars($tampil[$i][$j])."</td>";
                    }
                    echo "</tr>";
                }

                echo "</table>";
            }else {
                echo "Panjang nilai tidak sesuai dengan ukuran matriks";
            }
        }
    ?>
</body>
</html>