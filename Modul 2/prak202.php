<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PRAK202 - Menampilkan pesan error pada form</title>
    <style>
        .error {
            color: red;
        }
    </style>
</head>
<body>
    <?php
    $nama = $nim = $jenisk = "";
    $errors = array('nama' => '', 'nim' => '', 'jenisk' => '');

    if (isset($_POST['submit'])) {
        if (empty($_POST['nama'])) {
            $errors['nama'] = "* Nama tidak boleh kosong";
        } else {
            $nama = $_POST['nama'];
            if (!preg_match('/^[a-zA-Z\s]+$/', $nama)) {
                $errors['nama'] = "* Nama hanya boleh terdiri dari huruf dan spasi";
            }
        }
    
        if (empty($_POST['nim'])) {
            $errors['nim'] = "* nim tidak boleh kosong";
        } else {
            $nim = $_POST['nim'];
            if (!is_numeric($nim)) {
                $errors['nim'] = "* nim hanya boleh terdiri dari angka";
            }
        }
    
        if (empty($_POST['jenisk'])) {
            $errors['jenisk'] = "* jenis Kelamin tidak boleh kosong";
        } else {
            $jenisk = $_POST['jenisk'];
        }
    }
    ?>
    
    <form method="post">
        Nama: <input type="text" name="nama" value="<?= htmlspecialchars($nama) ?>">
        <div class="error"><?= $errors['nama'] ?></div>
        
        Nim: <input type="text" name="nim" value="<?= htmlspecialchars($nim) ?>">
        <div class="error"><?= $errors['nim'] ?></div>
        
        Jenis Kelamin:
        <div class="error"><?= $errors['jenisk'] ?></div>
        <input type="radio" name="jenisk" value="Laki-Laki" <?php if ($jenisk == 'Laki-Laki') echo 'checked'; ?>>Laki-Laki
        <br>
        <input type="radio" name="jenisk" value="Perempuan" <?php if ($jenisk == 'Perempuan') echo 'checked'; ?>>Perempuan
        <br>
        <input type="submit" name="submit" value="Submit">
    </form>

    <?php if ($nama && $nim && $jenisk) : ?>
        <?= htmlspecialchars($nama) ?><br>
        <?= htmlspecialchars($nim) ?><br>
        <?= htmlspecialchars($jenisk) ?><br>
    <?php endif; ?>
</body>
</html>
