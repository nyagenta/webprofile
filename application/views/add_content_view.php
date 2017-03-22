<!DOCTYPE html>
<html>
<head>
	<title>Add Content</title>
</head>
<body>
<h1>Tambahkan Konten Baru</h1>
<form action="<?= base_url() ?>contents/addContentDb" method="post">
	<select name="kategori">
		<option value="Berita">Berita</option>
		<option value="Blog">Blog</option>
	</select>
	<input type="text" name="judul" placeholder="Judul Konten"><br>
	<textarea cols="100" rows="10" name="deskripsi" placeholder="Isi Konten"></textarea><br>
	<input type="submit" name="submit">
</form>
</body>
</html>