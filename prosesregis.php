<?php
session_start();
if (isset($_POST['submit'])) {
	$nama = $_POST['Nama'];
	$nim = $_POST['Nim'];
	$email = $_POST['Email'];

	$data = array();
	$baru = array (
					'Nama' => $nama,
					'Nim'  => $nim,
					'Email' => $email
				  );
	array_push($data, $baru);
	$_SESSION['baru'] = $data;
}

?>
<table>
	<tr>
		<th>Nama</th>
		<th>Nim</th>
		<th>Email</th>
	</tr>
	<?php
	$baru = $_SESSION['baru'];
	$num =0;
	while ($num < count($baru)) {
	?>
	<tr>
		<td><?php echo $baru[$num]['Nama']; ?></td>
		<td><?php echo $baru[$num]['Nim']; ?></td>
		<td><?php echo $baru[$num]['Email']; ?></td>
	</tr>
	<?php
	$num++;
	}
	?>
</table>
