<!DOCTYPE html>
<html>
<head>
	<title>Konversi Suhu</title>
</head>
<body>
<p>Output yang diinginkan:</p>
	<form method="post">
		Nilai: <input type="number" name="nilai" value="<?php echo isset($_POST['nilai']) ? $_POST['nilai'] : ''; ?>">
		<br>
		Dari:
		<br>
		<input type="radio" name="dari" value="c" <?php echo (isset($_POST['dari']) && $_POST['dari'] == 'c') ? 'checked' : ''; ?>>Celcius
		<br>
		<input type="radio" name="dari" value="f" <?php echo (isset($_POST['dari']) && $_POST['dari'] == 'f') ? 'checked' : ''; ?>>Fahrenheit
		<br>
		<input type="radio" name="dari" value="r" <?php echo (isset($_POST['dari']) && $_POST['dari'] == 'r') ? 'checked' : ''; ?>>Reamur
		<br>
		<input type="radio" name="dari" value="k" <?php echo (isset($_POST['dari']) && $_POST['dari'] == 'k') ? 'checked' : ''; ?>>Kelvin
		<br>
		Ke:
		<br>
		<input type="radio" name="ke" value="c" <?php echo (isset($_POST['ke']) && $_POST['ke'] == 'c') ? 'checked' : ''; ?>>Celcius
		<br>
		<input type="radio" name="ke" value="f" <?php echo (isset($_POST['ke']) && $_POST['ke'] == 'f') ? 'checked' : ''; ?>>Fahrenheit
		<br>
		<input type="radio" name="ke" value="r" <?php echo (isset($_POST['ke']) && $_POST['ke'] == 'r') ? 'checked' : ''; ?>>Reamur
		<br>
		<input type="radio" name="ke" value="k" <?php echo (isset($_POST['ke']) && $_POST['ke'] == 'k') ? 'checked' : ''; ?>>Kelvin
		<br>
		<input type="submit" name="konversi" value="Konversi">
	</form>

	<?php
		if(isset($_POST['konversi'])){
			$nilai = $_POST['nilai'];
			$dari = $_POST['dari'];
			$ke = $_POST['ke'];

			if($dari == "c"){
				if($ke == "f"){
					$hasil = ($nilai * 9/5) + 32;
					echo "<br>Hasil konversi dari Celcius ke Fahrenheit: ".$hasil." °F";
				}
				if($ke == "r"){
					$hasil = $nilai * 4/5;
					echo "<br>Hasil konversi dari Celcius ke Reamur: ".$hasil." °R";
				}
				if($ke == "k"){
					$hasil = $nilai + 273.15;
					echo "<br>Hasil konversi dari Celcius ke Kelvin: ".$hasil." K";
				}
			}

			if($dari == "f"){
				if($ke == "c"){
					$hasil = ($nilai - 32) * 5/9;
					echo "<br>Hasil konversi dari Fahrenheit ke Celcius: ".$hasil." °C";
				}
				if($ke == "r"){
					$hasil = ($nilai - 32) * 4/9;
					echo "<br>Hasil konversi dari Fahrenheit ke Reamur: ".$hasil." °R";
				}
				if($ke == "k"){
					$hasil = ($nilai + 459.67) * 5/9;
					echo "<br>Hasil konversi dari Fahrenheit ke Kelvin: ".$hasil." K";
				}
			}
			if($dari == "r"){
				if($ke == "c"){
					$hasil = $nilai * 4/5;
					echo "<br>Hasil konversi dari Reamur ke Celcius: ".$hasil." °C";
				}
					if($ke == "f"){
					$hasil = ($nilai * 9/4) + 32;
					echo "<br>Hasil konversi dari Reamur ke Fahrenheit: ".$hasil." °F";
				}
					if($ke == "k"){
					$hasil = ($nilai * 5/4) + 273.15;
					echo "<br>Hasil konversi dari Reamur ke Kelvin: ".$hasil." K";
				}
			}
					if($dari == "k"){
					if($ke == "c"){
					$hasil = $nilai - 273.15;
					echo "<br>Hasil konversi dari Kelvin ke Celcius: ".$hasil." °C";
				}
					if($ke == "f"){
					$hasil = ($nilai * 9/5) - 459.67;
					echo "<br>Hasil konversi dari Kelvin ke Fahrenheit: ".$hasil." °F";
				}
					if($ke == "r"){
					$hasil = ($nilai - 273.15) * 4/5;
					echo "<br>Hasil konversi dari Kelvin ke Reamur: ".$hasil." °R";
				}
			}
		}
		?>			
	</body>
</html>
