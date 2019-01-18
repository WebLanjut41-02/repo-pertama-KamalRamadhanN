<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<form method="POST" action="">
		<h1>Kalkulator Berat Badan</h1>
		<table>
			<tr>
				<td>Tinggi Badan</td>
				<td>:</td>
				<td><input type="text" name="tg"></td>
			</tr>
			<tr>
				<td>Berat Badan</td>
				<td>:</td>
				<td><input type="text" name="bb"></td>
			</tr>
			<tr>
				<td>Jenis Kelamin </td>
				<td>:</td>
				<td><input type="radio" name="jk" value="Laki-Laki">Laki-Laki
				<input type="radio" name="jk" value="Perempuan">Perempuan</td>
			</tr>
			<tr>
				<td><input type="submit" name="submit" value="hitung"></td>
			</tr>
		</table>
	</form>
</body>
</html>

<?php  
	if (isset($_POST['submit'])) {
		$tg  = $_POST['tg'];
		$bb  = $_POST['bb'];
		$jk	 = $_POST['jk'];
		$bbn = $tg/100;
		$bbi = $bb/($bbn*$bbn);

		echo "Jenis Kelamin Anda : $jk <br>";
		echo "Tinggi Badan Anda : $tg Cm <br>";
		echo "Berat Badan Anda : $bb Kg<br>";
		echo "Berat Badan Ideal Anda : $bbi Kg";

	}
?>