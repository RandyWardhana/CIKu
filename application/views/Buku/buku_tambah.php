<title>Buku | <?= $header ?></title>

<?= form_open('buku/proses'); ?>

	<table>
		<tr>
			<td>Judul</td>
			<td>:</td>
			<td>
				<?= form_input('judul', '', 'required="required"'); ?>
			</td>
		</tr>
		<tr>
			<td>Pengarang</td>
			<td>:</td>
			<td>
				<?= form_input('pengarang', '', 'required="required"'); ?>
			</td>
		</tr>
		<tr>
			<td>Tahun Terbit</td>
			<td>:</td>
			<td>
				<?= form_input(array('type' => 'number', 'name' => 'tahun_terbit', 'required="required"')); ?>
			</td>
		</tr>
		<tr>
			<td></td>
			<td></td>
			<td>
				<?= form_input(array('type' => 'submit', 'name' => 'add', 'value' => 'Tambah')); ?>
			</td>
		</tr>
	</table>


<?= form_close(); ?>