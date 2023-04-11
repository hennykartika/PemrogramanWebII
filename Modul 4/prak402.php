<?php
$mhs = array(
    array("nama" => "Andi", "nim" => "2101001", "uts" => 87, "uas" => 65),
    array("nama" => "Budi", "nim" => "2101002", "uts" => 76, "uas" => 79),
    array("nama" => "Tono", "nim" => "2101003", "uts" => 50, "uas" => 41),
    array("nama" => "Jessica", "nim" => "2101004", "uts" => 60, "uas" => 75),
);

foreach ($mhs as &$nilai) {
    $nilai["akhir"] = $nilai["uts"] * 0.4 + $nilai["uas"] * 0.6;
    if ($nilai["akhir"] >= 80) {
        $nilai["huruf"] = "A";
    } elseif ($nilai["akhir"] > 70) {
        $nilai["huruf"] = "B";
    } elseif ($nilai["akhir"] > 60) {
        $nilai["huruf"] = "C";
    } elseif ($nilai["akhir"] > 50) {
        $nilai["huruf"] = "D";
    } else {
        $nilai["huruf"] = "E";
    }
}
unset($nilai); // hapus variabel referensi terakhir

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <style>
        table, tr, td, th {
            border: solid 1px black;
            border-collapse: collapse;
            padding: 10px;
            text-align: center;
        }
    </style>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Soal 2</title>
</head>
<body>
    <table>
        <tr style="background-color: #D3D3D3;">
            <td>Nama</td>
            <td>NIM</td>
            <td>Nilai UTS</td>
            <td>Nilai UAS</td>
            <td>Nilai Akhir</td>
            <td>Huruf</td>
        </tr>
        <?php
        foreach ($mhs as $nilai) {
            echo "<tr>";
            echo "<td>".$nilai["nama"]."</td>";
            echo "<td>".$nilai["nim"]."</td>";
            echo "<td>".$nilai["uts"]."</td>";
            echo "<td>".$nilai["uas"]."</td>";
            echo "<td>".$nilai["akhir"]."</td>";
            echo "<td>".$nilai["huruf"]."</td>";
            echo "</tr>";
        }
        ?>
    </table>
</body>
</html>