//Efek Kotak Dialog Text
var close = document.getElementsByClassName("closebtn");
var i;
for(i = 0; i < close.length; i++){
	close[i].onclick = function(){
		var div = this.parentElement;
		div.style.opacity="0";
		setTimeout(function(){div.style.display = "none";}, 600);
	}
}
//Fungsi Validasi Form Login
function validate(){
	document.getElementById("boxalert").style.display = "block";
	document.getElementById("boxalert").style.opacity = 1;

	var error ="";
	var name = document.getElementById("nama");
	if (name.value == "")
	{
		error = "Nama Anda Harus Dibuat ! ";
		document.getElementById("pesan").innerHTML = error;
		return false;
	}
	var alamat = document.getElementById("alamat");
	if (alamat.value == "")
	{
		error = "Alamat Anda Harus Dibuat ! ";
		document.getElementById("pesan").innerHTML = error;
		return false;
	}
	var email = document.getElementById("email");
	if (email.value == "")
	{
		error = "Email Anda Harus Dibuat ! ";
		document.getElementById("pesan").innerHTML = error;
		return false;
	}
	var telp = document.getElementById("telp");
	if (telp.value == "")
	{
		error = "Telephone Anda Harus Dibuat ! ";
		document.getElementById("pesan").innerHTML = error;
		return false;
	}
	var umur = document.getElementById("umur");
	if (umur.value == "")
	{
		error = "Umur Anda Harus Dibuat ! ";
		document.getElementById("pesan").innerHTML = error;
		return false;
	}else{
		return true;
	}
}