<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Registrasi Form Rental</title>
	<link rel="stylesheet" type="text/css" href="regist.php">
	<form name="form1" method="post" action="proses.php">
</head>
<body>
	<div class="login-box">
		<center>
		<h1>REGISTER HERE</h1>
			<p>Nama Lengkap</p>
			<input type="text" name="Username" id="Username" placeholder="Enter Username">
			<p>Alamat</p>
			<input type="text" name="Alamat" id="Alamat"placeholder="Enter Address">
			<p>No Handphone</p>
			<input type="text" name="NoHandphone" id="NoHandphone"placeholder="Enter Number">
			<p>Jenis Mobil</p><br>
				<td><select name="Jenis" id="Jenis">
					<option>Alphard</option>
					<option>Pajero</option>
					<option>Jazz</option>
					<option>Brio</option>
					<option>Xenia</option>
					<option>Ertiga</option>
					<option>Innova</option>
					<option>Ayla</option>
				</select>
				</td>
				<br><br>
			<p>Berapa Lama</p>
			<input type="text" name="Estimasi" id="Estimasi" placeholder="Estimasi peminjaman">
			<input type="submit" name="submit" value="Register">
		</form>
	</form>
	</center>
	</div>
</body>
</html>