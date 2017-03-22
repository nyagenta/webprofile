<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed'); ?>
<!DOCTYPE html>
<html>
<head>
	<title>Update Konten</title>
</head>
<body>
<h1>Update Konten</h1>
<?php 
foreach ($content->result() as $detail) {
?>
<form method="post" action="<?= base_url() ?>contents/updateContentDb">
	<input type="hidden" name="id_konten" value="<?php echo $detail->id_konten; ?>">
	<select name="kategori">
	<?php
if($detail->kategori =='Berita')
	echo '<option value="Berita" selected>Berita</option>';
else
	echo '<option value="Berita">Berita</option>';
if($detail->kategori == 'Blog')
	echo '<option value="Blog">Blog</option>';
else
	echo '<option value="Blog">Blog</option>';
	?>		
	</select>
	<input type="text" name="judul" placeholder="Judul Konten" value="<?php echo $detail->judul; ?>"><br>
	<textarea cols="100" rows="10" name="deskripsi"><?php echo $detail->deskripsi; ?></textarea><br>
	<input type="submit" name="update" value="Update">
</form>
<?php
}
 ?>
</body>
</html>