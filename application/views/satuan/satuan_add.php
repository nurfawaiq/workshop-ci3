<title>Tambah Satuan</title>
<h3>Tambah Satuan</h3>

<form action="<?php echo site_url('satuan/proses'); ?>" method="post">
	Nama Satuan : 
	<input type="text" name="nama" required autofocus>
	<br>
	Keterangan : 
	<textarea name="ket"></textarea>
	<br>
	<input type="submit" name="add" value="Simpan">
</form>