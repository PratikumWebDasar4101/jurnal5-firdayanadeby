<?php




?>

<!DOCTYPE html>
<html>
<head>
	<title>komentar</title>
</head>
<body>
	<form action=" " method="post">
<table>
	<tr>
		<td>Nama <br>
		<input type="text" name="nama">
		</td>
	</tr>

	<tr>
		<td>Komentar<br>
			<textarea name="komentar"></textarea><br><br>
			<input type="submit" name="submit" value="submit">
		</td>
	</tr>
</table>
</form>
</body>
</html>

<?php
if (isset($_POST['submit'])) {
	$nama   = $_POST['nama'];
	$komentar = $_POST['komentar'];
	$baru = explode(" ", $komentar);
	if (count($baru) < 5) {
		echo "komentar harus lebih dari 5 kata";
	}else {
		echo "komentar anda ".$komentar;
		echo "<br>";
		echo "jumlah kata :".count($baru);
	}
}
?>
