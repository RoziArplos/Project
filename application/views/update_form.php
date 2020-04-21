<!DOCTYPE html>
<html lang="en">
<head>
	<title>KHS Mahasiswa</title>
	<script src=”https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js”></script>
	<style type="text/css">
		body{
			font-family: sans-serif;
			background: #d5f0f3;
		}

		h1{
			text-align: center;
			/*ketebalan font*/
			font-weight: 300;
		}
		.konten{
			width: 700px;
			background: white;
			/*meletakkan form ke tengah*/
			margin: 80px auto;
			padding: 30px 20px;
		}
		.teks{
			text-align: center;
			/*membuat semua huruf menjadi kapital*/
			text-transform: uppercase;
		}
	</style>
</head>
<body>
	<h1>Sistem KHS sederhana</h1>
	<div class="konten">
			<form action="<?php echo base_url('login/update_data'); ?>" method="POST">
				<input type="hidden" name="nim" value="">
				<label>
					Nama : <input type="text" name="judul" value="" autofocus>
				</label>
				<br>
				<label>
					Alamat : <br>
				<textarea name="konten"></textarea>
				</label>
				<br>
			<input type="submit" name="Simpan">
			</form>
	</div>
</body>
</html>