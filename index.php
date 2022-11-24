<?php
include 'koneksi.php';
include 'ceklogin.php';
$tgl=date('Y-m-d');
?>
<!doctype html>
<html>
<head>
	<title>Sistem Informasi Perpustakaan</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body >
	<div id="container">
		<div id="header">
			<div id="logo-perpustakaan-container">
				<image id="logo-perpustakaan" src="images/logo-perpustakaan3.png" border=0 style="border:0; text-decoration:none; outline:none"> 
			</div>
			<div id="nama-alamat-perpustakaan-container">
				<div class="nama-alamat-perpustakaan">
					<h1> PERPUSTAKAAN UMUM </h1>
				</div>
				<div class="nama-alamat-perpustakaan">
					<h4>Jl. Lembah Abang No 11, Telp: (021)55555555</h4>
				</div>
			</div>
		</div>
		<div id="header2">
			<div id="nama-user">Hai <?php echo $_SESSION['nama'];?> <a href='logout.php' onclick='return yakinlogout()'>[Logout]</a></div>
		</div>
		<div id="sidebar">
			<a href="index.php?p=beranda">Beranda</a>
			<p class="label-navigasi">Entry Data Dan Transaksi</p>
			<ul>
				<li><a href="index.php?p=anggota">Data Anggota</a></li>
				<li><a href="index.php?p=buku">Data Buku</a></li>
				<li><a href="index.php?p=transaksi-peminjaman">Transaksi Peminjaman</a></li>
			</ul>
			<p class="label-navigasi">Laporan</p>
			<ul>
				<li><a href="index.php?p=lap-anggota" target="_blank">Lap.Data Anggota</a></li>
				<li><a href="index.php?p=lap-buku" target="_blank">Lap.Data Buku</a></li>
			</ul>
		</div>
		<div id="content-container">
			    <div class="container">
		<div class="row"><br/><br/><br/>
			<div class="col-md-10 col-md-offset-1" style="background-image:url('../asanoer-background.jpg')">
				<div class="col-md-4 col-md-offset-4">
					<div class="panel panel-warning login-panel" style="background-color:rgba(255, 255, 255, 0.6);position:relative;">
						
						<div class="panel-footer">
							
						</div>
					</div>
				</div>
			</div>
		</div>
    </div>
		<?php
			$pages_dir='pages';
			if(!empty($_GET['p'])){
				$pages=scandir($pages_dir,0);
				unset($pages[0],$pages[1]);
				$p=$_GET['p'];
				if(in_array($p.'.php',$pages)){
					include($pages_dir.'/'.$p.'.php');
				}else{
					echo'Halaman Tidak Ditemukan';
				}
			}else{
				include($pages_dir.'/beranda.php');
			}
		?>
		</div>
		<div id="footer"><h3>Sistem Informasi Perpustakaan (sipus) | Praktikum </h3></div>
	</div>
<script type='text/javascript'>
	function yakinlogout(){
		if(confirm('Yakin mau logout?')){
			return true;
		}else{
			return false;
		}
	}
	</script>
</body>
</html>