<!DOCTYPE html>
<html lang="en">
<head>
	<title>LOGIN</title>
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

		.tulisan_login{
			text-align: center;
			/*membuat semua huruf menjadi kapital*/
			text-transform: uppercase;
		}

		.kotak_login{
			width: 350px;
			background: white;
			/*meletakkan form ke tengah*/
			margin: 80px auto;
			padding: 30px 20px;
		}

		label{
			font-size: 11pt;
		}

		.form_login{
			/*membuat lebar form penuh*/
			box-sizing : border-box;
			width: 100%;
			padding: 10px;
			font-size: 11pt;
			margin-bottom: 20px;
		}

		.tombol_login{
			background: #46de4b;
			color: white;
			font-size: 11pt;
			width: 100%;
			border: none;
			border-radius: 3px;
			padding: 10px 20px;
		}
	</style>
</head>
<body>
	<h1>Login Form</h1>
	<div class="kotak_login">
		<p class="tulisan_login">Silahkan <br> masukkan NIM dan Password</p>
		<form action="" method="POST">		
			<label>NIM</label>
			<input type="text" name="nim" class="form_login" required>
 
			<label>Password</label>
			<input type="password" name="passwd" class="form_login" required>
 
			<input type="submit" class="tombol_login" value="LOGIN">
		</form>
	</div>
</body>
</html>