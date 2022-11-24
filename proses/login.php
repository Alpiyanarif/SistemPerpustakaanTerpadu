<?php
/*include'../koneksi.php';

//If(isset($_POST['login'])){
	$user = $_POST['username'];
	$pass = md5($_POST['pass']);
	$kueri = "select * from tbuser where iduser='$user' and password='$pass'";
	$result = mysqli_query($db,$kueri);

	$jumlah = mysqli_num_rows($result);
	if($jumlah>0){
		$fetch = mysqli_fetch_array($result,MYSQLI_ASSOC);
		print_r($fetch);
		//die();
		$_SESSION['username'] = $fetch['iduser'];
		$_SESSION['nama'] = $fetch['nama'];
		//die(print_r($_SESSION));
		header("location:../index.php?p=anggota");
	}else{
		die("username dan password salah");
	}
}
?>