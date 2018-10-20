<?php function headerku(){ ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Epoli</title>
	<link rel="stylesheet" href="../style.css">
</head>
<body>
<div class="navop">
	<div class="konten">
			<h2 class="kiri">&#9630; E-poli | Sistem Informasi Poliklinik </h2>
			<a href="logout.php" class="kanan">Logout</a>
	</div>
</div>

<div class="sideop">
	<div class="konten">
		<a href="index.php">&#9776; Pendaftaran</a>
		<a href="dafpasien.php">&#9745; Lihat Daftar</a>
		<a href="pasien.php">&#9855; Registrasi Pasien</a>
		<a href="dokter.php">&#9739; Dokter</a>
		<!-- <a href="pembayaran.php">$ Pembayaran</a> -->
	</div>
</div>

<?php } ?>
	

<?php function footerku(){ ?>
<div class="footerop">
	<center>&copy; hikam 2017 | Sistem Informasi Poliklinik</center>
</div>
</body>
</html>
<?php } ?>
