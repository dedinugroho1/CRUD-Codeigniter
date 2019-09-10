<!DOCTYPE html>
<html>

<head>
	<title>Membuat CRUD dengan CodeIgniter</title>
</head>

<body>
	<center>
		<h1>Membuat CRUD dengan CodeIgniter</h1>
	</center>
	<center><?php echo anchor(base_url('pegawai/tambah'), 'Tambah Data'); ?></center>
	<table style="margin:20px auto;" border="1">
		<tr>
			<th>No</th>
			<th>Nama</th>
			<th>Alamat</th>
			<th>jabatan</th>
			<th>Action</th>
		</tr>
		<?php
		$no = 1;
		foreach ($tampil as $u) {
			?>
			<tr>
				<td><?php echo $no++ ?></td>
				<td><?php echo $u->nama ?></td>
				<td><?php echo $u->alamat ?></td>
				<td><?php echo $u->jabatan ?></td>
				<td>
					<?php echo anchor('pegawai/edit/' . $u->id, 'Edit'); ?>
					<?php echo anchor('pegawai/hapus/' . $u->id, 'Hapus'); ?>
				</td>
			</tr>
		<?php } ?>
	</table>

	<center>
		<h2>Dedi Nugroho</h2>
	</center>
</body>

</html>

<!-- //Dedi Nugroho // 0895361435659 // Surakarta -->