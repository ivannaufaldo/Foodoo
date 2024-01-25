<div class = "row">
	<div class = "col justify-content-center text-center">
		<p class = "foodoo-kategori text-center mt-5 mb-5">Foodoo</p>
		<p class = "konfirmasi-delete-kategori mt-5 mb-5">KONFIRMASI DELETE KATEGORI</p>
		<p class = "Data-kategori mt-5 mb-5" id ="id-kategori">### <?php echo $id_kategori;?></p>
		<p class = "Data-kategori mt-5 mb-5" id ="nama-kategori">### <?php echo $nama;?></p>
		<p class = "konfirmasi-text mt-5 mb-5">APAKAH ANDA YAKIN INGIN MENGHAPUS KATEGORI INI?</p>
		<form method="post" action="<?php echo base_url().'index.php/kategori/delete/';?>">
			<div class="form-group">
				<input type="hidden" name="id" id="id" value="<?php echo $id_kategori ?>">
			</div>
			<button type="Submit" id = "confirm-delete-k" class="btn btn-primary" name="submit" value="submit">YA</button>
			<a id = "cancel-delete-k" href="<?php echo base_url('index.php/admin_dashboard')?>" class="btn btn-secondary">TIDAK</a>
		</form>
	</div>
</div>
               

