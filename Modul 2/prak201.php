<!DOCTYPE html>
<html>
<head>
  <title>Urutkan Nama dari yang Terkecil</title>
</head>
<body>
  <form method="POST">
    Nama 1: <input type="text" name="nama1" value="<?php if(isset($_POST['submit'])) {echo $_POST['nama1'];} ?>"><br>
    Nama 2: <input type="text" name="nama2" value="<?php if(isset($_POST['submit'])) {echo $_POST['nama2'];} ?>"><br>
    Nama 3: <input type="text" name="nama3" value="<?php if(isset($_POST['submit'])) {echo $_POST['nama3'];} ?>"><br>
    <input type="submit" name="submit" value="Urutkan">
  </form>

  <?php
  if (isset($_POST['submit'])) {
    // Mengambil nilai input dari form
    $nama1 = $_POST['nama1'];
    $nama2 = $_POST['nama2'];
    $nama3 = $_POST['nama3'];

    // Mengurutkan nama dari yang terkecil
    $sorted_names = [$nama1, $nama2, $nama3];
    sort($sorted_names);

    // Menampilkan hasil pengurutan
    foreach ($sorted_names as $name) {
      echo "$name <br>";
    }
  }
  ?>
</body>
</html>
