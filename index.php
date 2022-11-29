<!DOCTYPE html>
<html>
<head>
	<title>Input And Output</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<meta name="viewport" content="width=device-width ,initial-scale=1">
</head>
<body>
	<div id="data">
		<div id="boxalert" class="alert">
			<span class="closebtn">&times;</span>
			<strong><b>Pesan !</b></strong>
			<span id="pesan">Silahkan Isikan Data Diri Anda ! </span>
		</div>
		<div class="kotak_data">
			<h3 class="tulisan_data">Silahkan Masukkan Data Anda</h3>	
			<form method="POST" enctype="multipart/form-data" action="backend.php" onSubmit="return validate()">

				<label class="label-form">Nama Anda : </label>
				<input type="text" id="nama" name="nama" class="form_data" placeholder="Nama Anda.." ><br>

				<label class="label-form">Alamat : </label>
				<textarea row="3" col="25" id="alamat" name="alamat" class="form_data" placeholder="Alamat Anda.."></textarea><br>

				<label class="label-form">Email : </label>
				<input type="email" id="email" name="email" class="form_data" placeholder="Email Anda.."><br>

				<label class="label-form">Telephone : </label>
				<input type="telp" id="telp" name="telp" class="form_data" placeholder="Telephone Anda.."><br>

				<label class="label-form">Umur : </label><br>
				<input type="number" id="umur" name="umur" class="form_umur" min="10" max="130" placeholder="Umur Anda.."> Tahun<br>

				<input type="submit" id="submit" name="submit" class="tombol_submit" value="KIRIM">				
				<input type="reset" id="batal" name="batal" value="BATAL" class="tombol_batal">

		
	</form>
	</div>
</body>
<script type="text/javascript" src="script.js"></script>
</html>