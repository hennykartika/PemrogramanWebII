<!DOCTYPE html>
<html>
<head>
	<title>PRAK204</title>
</head>
<body>
	<form method="POST">
		<label>Nilai: </label>
		<input type="text" name="nilai" required value="<?php echo isset($_POST['nilai']) ? $_POST['nilai'] : ''; ?>">
        <br>
		<input type="submit" name="submit" value="Konversi">
	</form>

	<?php
		if(isset($_POST['submit'])){
			$nilai = $_POST['nilai'];

			if($nilai == 0){
				echo "Nol";
			}
			elseif($nilai >= 1 && $nilai <= 9){
				echo "Satuan";
			}
			elseif($nilai >= 11 && $nilai <= 19){
				echo "Belasan";
			}
			elseif($nilai >= 10 && $nilai <= 99 && $nilai % 10 == 0){
				echo "Puluhan";
			}
			elseif($nilai >= 10 && $nilai <= 99){
				echo "Puluhan";
			}
			elseif($nilai >= 100 && $nilai <= 999){
				echo "Ratusan";
			}
			else{
				echo "Anda Menginput Melebihi Limit Bilangan";
			}
		}
	?>
</body>
</html>
