<!DOCTYPE html>
<html>
<head>
	<title>Form Registrasi</title>
</head>
<body>
	<table>
		<form action="prosesregis.php" method="post">
		<tr>
			<td>Nama &nbsp &nbsp &nbsp
			<input type="text" name="Nama" pattern="[A-Za-z ]{1,25}" title="maksimal 25 karakter dan tidak mengandung angka" required>
			</td>
		</tr>
		<tr>
			<td>Nim &nbsp &nbsp &nbsp &nbsp
			<input type="text" name="Nim" pattern="[0-9]{10}" title="harus angka 10 karakter" required>
			</td>
		</tr>
		<tr>
			<td>Email &nbsp &nbsp &nbsp
			<input type="text" name="Email" placeholder="@gmail.com" required><br>
			<input type="submit" name="submit" value="submit">
			</td>
		</tr>
		</form>
	</table>
</body>
</html>
