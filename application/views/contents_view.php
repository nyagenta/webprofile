<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');?>
<!DOCTYPE html>
<html>
<head>
	<title>Contents</title>
</head>
<body>
	<?php 
		$contentLength = $listContent->num_rows();

		if($contentLength == 0){
	?>
	Konten masih kosong. <a href="<?= base_url() ?>contents/addContent">Tambah Konten</a>
	<?php
		}else{
	?>
	<h1>List Konten</h1>
	<table border="1">
		<thead>
			<tr>
				<th>No.</th>
				<th>Kategori</th>
				<th>Judul</th>
				<th>Deskripsi</th>
			</tr>
		</thead>
		<tbody>
			<?php 
				$i = 0;
				foreach ($listContent->result() as $row) {
			?>
		<tr>
			<td><?= ++$i ?></td>
			<td><?= $row->kategori ?></td>
			<td><?= $row->judul ?></td>
			<td><?= $row->deskripsi ?></td>
			<td>
				<a href="<?= base_url() ?>contents/updateContent/<?= $row->id_konten ?>">Update</a>
				<a href="<?= base_url() ?>contents/deleteContent/<?= $row->id_konten ?>">Delete</a>
			</td>
		</tr>
			<?php
				}
			 ?>
		</tbody>
	</table>
	<?php
		}
	 ?>
	<a href="<?= base_url() ?>contents/addContent">Tambah Konten</a>
</body>
</html>