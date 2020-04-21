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
		<table border="1" align="center">
			<th>DATA Mahasiswa</th>
			<th>Nilai</th>
			<th>Action</th>
			<tr>
				<td>NIM</td>
				<td>185150400111047</td>
				<td></td>
			</tr>
			<tr>
				<td>Nama</td>
				<td>Moh. Fathur Rozi</td>
				<td> <a href="">Edit</a> </td>
			</tr>
			<tr>
				<td>Alamat</td>
				<td>JL. Cimahi no.16 Klojen-Malang</td>
				<td> <a href="">Edit</a> </td>
			</tr>
		</table>
		<br><br>
		<p class="teks">Nilai KHS</p>
		<table border="1" align="center">
			<th>Pemrograman Dasar</th>
			<th>Pemrograman Lanjut</th>
			<th>Dasar Basis Data</th>
			<th>Administrasi Basis Data</th>
			<tr align="center">
				<td>80</td>
				<td>90</td>
				<td>88</td>
				<td>89</td>
			</tr>
		</table>
		<br><br>
		<table border="0" align="center">
			<tr>
				<th align="center">
					<a href="<?php echo base_url('login/logout'); ?>">Logout</a>
				</th>
			</tr>
		</table>
	</div>
</body>
</html>