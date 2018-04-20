<title>Edit Satuan</title>
<h3>Edit Satuan</h3>

<form action="<?php echo site_url('satuan/proses'); ?>" method="post">
	<input type="hidden" name="id" value="<?=$row->id_satuan?>">
	Nama Satuan : 
	<input type="text" name="nama" value="<?=$row->nama_satuan?>" required autofocus>
	<br>
	Keterangan : 
	<textarea name="ket"><?=$row->keterangan?></textarea>
	<br>
	<input type="submit" name="edit" value="Simpan">
</form>