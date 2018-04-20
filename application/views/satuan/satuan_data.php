<h3><?=$title?></h3>

<table border="1" style="border-collapse: collapse;">
	<thead>
		<tr>
			<th>#</th>
			<th>Nama Satuan</th>
			<th>Keterangan</th>
			<th>Opsi</th>
		</tr>
	</thead>
	<tbody>
		<?php
		foreach ($row->result() as $r => $data) {
		?>
			<tr>
				<td><?=$data->id_satuan?></td>
				<td><?=$data->nama_satuan?></td>
				<td><?=$data->keterangan?></td>
				<td>
					<a href="<?=site_url('satuan/edit/'.$data->id_satuan)?>">Edit</a> | 
					<a href="<?=site_url('satuan/del/'.$data->id_satuan)?>" onclick="return confirm('Yakin menghapus data?')">Hapus</a>
				</td>
			</tr>
		<?php
		}
		?>
	</tbody>
</table>
<br>
<a href="<?=site_url('satuan/add')?>">Tambah Data</a>