<?php 
require_once 'view/view.php';
require_once '../Control.php';

if(!isset($_SESSION['user']) ){
	header('Location: ../index.php');
}


$query = "SELECT * FROM pasien ORDER BY namapsn ASC ";
$dafpasien = data($query);

 ?>

<?php headerku(); ?>
<div class="konten">
	<div class="mainop">
	
	<div class="pendaftaran">
		<div class="form-abu border">
			<h2>Pembayaran Poli</h2>
			<form action="" method="post">
				<label for="">Nama Pasien</label>
				<select name="dokter" class="f50">
		<?php while($row = mysqli_fetch_assoc($dafpasien)){ ?>
					<option value=""><?= $row['namapsn'] ?></option>
		<?php } ?>
				</select>
				<label for="">Bayar</label>
				<input type="number" placeholder="Bayar" class="f50">
				<label for=""></label>
				<input type="submit" value="Bayar" class="biru" name="tambah">
			</form>
		</div>
	</div>

	</div>
</div>
<?php footerku(); ?>
