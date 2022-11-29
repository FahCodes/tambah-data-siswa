<?php 
if(isset($_POST['submit'])||isset($_POST['nama'])){
	if(!empty($_POST['nama'])){
		$nama = $_POST['nama'];
	}else{
		$nama = "kosong";
	}
	if (!empty($_POST['alamat'])){
		$alamat = $_POST['alamat'];
	}else{
		$alamat = "kosong";
	}
	if (!empty($_POST['email'])){
		$email = $_POST['email'];
	}else{
		$email = "kosong";
	}
	if (!empty($_POST['telp'])){
		$telp = $_POST['telp'];
	}else{
		$telp = "kosong";
	}
	if (!empty($_POST['umur'])){
		$umur = $_POST['umur'];
	}else{
		$umur = "kosong";
	}
	echo "Selamat Datang <b>".$nama."</b><br>";
	echo "Alamat Anda : ".$alamat."<br>";
	echo "Email Anda : ".$email."<br>";
	echo "Telephone Anda : ".$telp."<br>";
	echo "Umur Anda : ".$umur."Tahun<br>";
	echo "<a href='index.php'>Kembali</a>";
}else{
	echo "Tidak Ada Data Yang Terkirim ! "."<br>";
	echo "<a href='index.php'>Kembali</a>";
}
?>
