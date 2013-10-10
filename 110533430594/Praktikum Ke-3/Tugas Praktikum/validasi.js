function cek(krt) {
	karakter = /^[A-Za-z]{1,}$/;<!--nama harus berupa huruf,--!>
	return karakter.test(krt);
}

function otent() //function validasi inputan kosong dan validasi string
{
	var usr = document.getElementById("Username").value; //inisialisasi variabel usr, value diambil dari id input Username
	var psw  = document.getElementById("Password").value; //inisialisasi variabel psw, value diambil dari id input Password
if(usr == "" || psw == "") //validasi field kosong 
{
	alert("Eits.... Field Tidak Boleh Kosong!!!");
	Username.focus(); 
	return false;
}
else if (!cek(usr) === true || !cek(psw)===true) //validasi string 
{
	alert("Eitss.... Tidak Boleh Input Angka!!");
	Username.focus();
	return false;
}else{
return true;}
}
