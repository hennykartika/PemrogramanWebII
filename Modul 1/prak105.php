<!DOCTYPE html>
<html>
<head>
	<title>Daftar Smartphone Samsung</title>
	<style>
		table {
			border-collapse: collapse;
			width: 100%;
			border: 5px double black;
			background-color: white;
		}
		th, td {
			text-align: left;
			padding: 8px;
			border-bottom: 2px double white;
			border-right: 2px double white;
			border: double;
			color: black;
		}
		th {
			background-color: #ff0000;
			border-right: 2px double white;
			border: double;
			padding: 16px;
			font-size: 24px;
		}
		tr:first-child th {
			border-top: 2px double black;
		}
		tr:last-child td {
			border-bottom: none;
		}
	</style>
</head>
<body>
	<?php
	// Deklarasi associative array daftar smartphone Samsung
	$samsung_smartphones = array(
		"Samsung Galaxy S22",
		"Samsung Galaxy S22+",
		"Samsung Galaxy A03",
		"Samsung Galaxy Xcover 5"
	);
	?>
	<table>
		<tr>
			<th>Daftar Smartphone Samsung</th>
		</tr>
		<?php
		// Looping associative array untuk menampilkan setiap elemen sebagai baris tabel
		foreach($samsung_smartphones as $smartphone) {
			echo "<tr><td>" . $smartphone . "</td></tr>";
		}
		?>
	</table>
</body>
</html>
