<title>Buku | <?= $header ?></title>

<style type="text/css">
	
	body {
		font-family: Segoe UI;
	}

	table.data {
		border-collapse: collapse;
	}

	table.data th, table.data td {
		padding: 5px;
	}

	a.add {
		text-decoration: none;
		background-color: #2b9dff;
		border: 2px solid #2b9dff;
		border-radius: 5px;
		padding: 5px;
		color: #fff;
		transition: .3s ease;
	}

	a.add:hover {
		filter: brightness(90%);
	}

	a.edit {
		font-weight: 300;
		text-decoration: none;
		background-color: #666;
		border: 2px solid #666;
		border-radius: 5px;
		padding: 1px;
		color: #fff;
		transition: .3s ease;
	}

	a.edit:hover {
		filter: brightness(90%);
	}

	a.delete {
		font-weight: 300;
		text-decoration: none;
		background-color: #ff0000;
		border: 2px solid #ff0000;
		border-radius: 5px;
		padding: 1px;
		color: #fff;
		transition: .3s ease;
	}

	a.delete:hover {
		filter: brightness(90%);
	}	

</style>


<table class="data" border="1">
	<tr>
		<th>ID</th>
		<th>Judul</th>
		<th>Pengarang</th>
		<th>Tahun Terbit</th>
		<th>Action</th>
	</tr>
	<?php 
	foreach ($buku as $b => $row) { ?>
		<tr>
			<td><?= $row->id; ?></td>
			<td><?= $row->judul; ?></td>
			<td><?= $row->pengarang; ?></td>
			<td><?= $row->tahun_terbit; ?></td>
			<td>
				<a class="edit" href="<?= site_url('buku/edit/'.$row->id); ?>">Edit</a>
				<a class="delete" href="<?= site_url('buku/delete/'.$row->id); ?>" onclick="return confirm('Yakin akan menghapus data ?')">Delete</a>
			</td>
		</tr>
	<?php } ?>
</table>

<div style="margin-top: 15px;">
	<a class="add" href="<?= site_url('buku/add'); ?>">Tambah</a>
</div>