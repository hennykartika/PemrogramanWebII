<?php
$mhs = [
    [
        "no" => 1,
        "nama" => "Ridho",
        "matkul" => [
            ["nama_mk" => "Pemrograman I", "sks" => 2],
            ["nama_mk" => "Praktikum Pemrograman I", "sks" => 1],
            ["nama_mk" => "Pengantar Lingkungan Lahan Basah", "sks" => 2],
            ["nama_mk" => "Arsitektur Komputer", "sks" => 3]
        ]
    ],
    [
        "no" => 2,
        "nama" => "Ratna",
        "matkul" => [
            ["nama_mk" => "Basis Data I", "sks" => 2],
            ["nama_mk" => "Praktikum Basis Data I", "sks" => 1],
            ["nama_mk" => "Kalkulus", "sks" => 3]
        ]
    ],
    [
        "no" => 3,
        "nama" => "Tono",
        "matkul" => [
            ["nama_mk" => "Rekayasa Perangkat Lunak", "sks" => 3],
            ["nama_mk" => "Analisis dan Perancangan Sistem", "sks" => 3],
            ["nama_mk" => "Komputasi Awan", "sks" => 3],
            ["nama_mk" => "Kecerdasan Bisnis", "sks" => 3]
        ]
    ]
];

for ($i = 0; $i < count($mhs); $i++) {
    $jmlSks = 0;
    for ($j = 0; $j < count($mhs[$i]["matkul"]); $j++) {
        $jmlSks += $mhs[$i]["matkul"][$j]["sks"];
    }
    $mhs[$i]["jmlSks"] = $jmlSks;
    if ($mhs[$i]["jmlSks"] < 7) {
        $mhs[$i]["keterangan"] = "Revisi KRS";
    } else {
        $mhs[$i]["keterangan"] = "Tidak Revisi KRS";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <style>
        table, tr, td, th {
            border: solid 1px black;
            border-collapse: collapse;
            padding: 5px;
        }
    </style>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Soal 3</title>
</head>
<body>
    <table>
        <tr>
            <td>No</td>
            <td>Nama</td>
            <td>Mata Kuliah diambil</td>
            <td>SKS</td>
            <td>Total SKS</td>
            <td>Keterangan</td>
        </tr>
        <?php
            for ($i=0; $i < count($mhs); $i++) {
                for ($j=0; $j < count($mhs[$i]["matkul"]); $j++) {
                    echo "<tr>";
                    if ($j == 0) {
                        echo "<td>".$mhs[$i]["no"]."</td>";
                        echo "<td>".$mhs[$i]["nama"]."</td>";
                        echo "<td>".$mhs[$i]["matkul"][$j]["nama_mk"]."</td>";
                        echo "<td>".$mhs[$i]["matkul"][$j]["sks"]."</td>";
                        echo "<td>".$mhs[$i]["jmlSks"]."</td>";
                        if($mhs[$i]["keterangan"]=="Revisi KRS"){
                            echo "<td style='background-color:red'>".$mhs[$i]["keterangan"]."</td>";
                        }
                        else{
                            echo "<td style='background-color:green'>".$mhs[$i]["keterangan"]."</td>";
                        }
                    } else {
                        echo "<td></td>";
                        echo "<td></td>";
                        echo "<td>".$mhs[$i]["matkul"][$j]["nama_mk"]."</td>";
                        echo "<td>".$mhs[$i]["matkul"][$j]["sks"]."</td>";
                        echo "<td></td>";
                        echo "<td></td>";
                    }
                    echo "</tr>";
                }
            }
        ?>
    </table>
</body>
</html>